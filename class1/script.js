var currentImage;
var lastGaleryChild;
var currentLocation;
var choosenCatName;


$(document).ready(function () {

    $('.class-cat').click(function () {
        choosenCatName = $(this)[0].innerText.replace(/\s/gi,'_').substring(1, $(this)[0].innerText.length);
        loadFlatNav();

    });

});

function removeDir(e, element) {
    e.stopPropagation();
    var deletingCat = element[0].innerText;
    var remove = confirm("Czy na pewno chcesz usunąć całą kategorię: " + deletingCat + " ?\nUwaga! Jeżeli w kategorii masz jakieś pliki to usuwanie nie zadziała !");
    if (remove) {
        $.ajax({
            type: "POST",
            url: "class1/removeDir.php",
            data: {remDir: deletingCat}
        }).done(function (data) {
            loadFlatNav();
            $('.gallery-flatnav').trigger('click');
        });
    }
}

function loadFlatNav() {
    $.ajax({
        type: "POST",
        url: "class1/content.php",
        data: {classCatName: choosenCatName}
    }).done(function (data) {
        $(".content").html(data);

        $('.menu-clicked').trigger('click');
        getDirectories();
    });
}

function makeDir() {

    var newDir = prompt("Wpisz nową kategorię galerii:");
    if (newDir != null && /\S/.test(newDir)) {
        newDir = newDir.replace(/\s/gi,'_');
        $.ajax({
            type: "POST",
            url: "class1/makeDir.php",
            data: {newDir: newDir}
        }).done(function (data) {
            console.log(data);
            loadFlatNav();
            $('.gallery-flatnav').trigger('click');
        });
    }
}

function sendFile() {
    var file_data = $('#sortpicture').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    $.ajax({
        url: 'upload.php',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,

        type: 'POST',
        success: function (php_script_response) {
            lastGaleryChild.parent().trigger('click');

        }
    });
}

function getDirectories() {
    $.ajax({
        type: "POST",
        url: "class1/getDirectories.php"
    }).done(function (data) {

        $('.gallery-output').prepend(data);


    });
}



function viewGallery(chld) {

    lastGaleryChild = chld;

    $('.sidebar').removeClass("show-sidebar");
    $('.sidebar').addClass("hide-sidebar");

    currentLocation = chld[0].innerText.replace(/\s/gi,'_');

    $.ajax({
        type: "POST",
        url: "class1/viewGallery.php",
        data: {direct: currentLocation}
    }).done(function (data) {
        $('#ajax-output').html(data);

        Galleria.loadTheme('js/gallery_plugin/galleria.classic.js');
        Galleria.run('.galleria');
        Galleria.ready(function () {
            var gallery = this; // galleria is ready and the gallery is assigned
            $('#fullscreen').click(function () {
                gallery.toggleFullscreen(); // toggles the fullscreen
            });
        });
        Galleria.on('image', function (e) {
            currentImage = e.galleriaData.image;
        });



    });



}

function newRecord() {
    $('.sidebar').removeClass("show-sidebar");
    $('.sidebar').addClass("hide-sidebar");

    $("#ajax-output").load("class1/newRecord.php", function (data) {
        showData();
    });
}

function showData() {
    $.ajax({
        type: "POST",
        url: "display.php"
    }).done(function (data) {
        $('#miejsce').html(data);
    });
}

function removeImage() {
    var remove = confirm("Czy na pewno chcesz usunąć plik " + currentImage.substring(8, currentImage.length) + "?");
    if (remove) {
        $.ajax({
            url: 'class1/removeImage.php',
            type: 'POST',
            data: {path: currentImage},
            success: function (response) {
                lastGaleryChild.parent().trigger('click');
            }
        });
    }

}
