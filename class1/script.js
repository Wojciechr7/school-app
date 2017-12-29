var currentImage;
$(document).ready(function () {

    $('#class1').click(function () {
        $(".content").load("class1/content.php", function (data) {
            $('.menu-clicked').trigger('click');
        });

    });


});

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
        type: 'post',
        success: function (php_script_response) {
            viewGallery();
        }
    });
}


function viewGallery() {

    $('.sidebar').removeClass("show-sidebar");
    $('.sidebar').addClass("hide-sidebar");
    $("#ajax-output").load("class1/viewGallery.php", function (data) {

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
                viewGallery();
            }
        });
    }

}