var notepadExpanded = false;

$(document).ready(function() {
    showData();

    showImages();

    setTimeout(function() {
        $('.menu').trigger('click');
    },0);


    $('input[type="password"]').on('focus', function () {
        $('*').addClass('password');
    }).on('focusout', function () {
        $('*').removeClass('password');
    });

    $(document).on('click', function(e) {
        if (e.target.id === 'paper-main') {
            toggleNotepad();
        }
    })


});
function toggleNotepad() {
        if(!notepadExpanded) {
            $('.paper').css('right', '-20%');
            notepadExpanded = true;
        }
        else
        {
            $('.paper').css('right', '-87%');
            notepadExpanded = false;
        }

}

function createTable() {
    $.ajax({
        type: "POST",
        url: "newtable.php"
    }).done(function(data) {



    });

}

function insertTable() {
    $.ajax({
        type: "POST",
        url: "insert.php",
        data: {
            'id': $('#id').val(),
            'imie': $('#imie').val(),
            'nazwisko': $('#nazwisko').val(),
            'rok': $('.rok').val()
        }
    }).done(function(data) {
        showData();


    });


}



function showImages() {
    $.ajax({
        type: "POST",
        url: "getFiles.php"
    }).done(function(data) {
        $('#gallery').html(data);
    });

}



function delet(nr) {
    $.ajax({
        type: "POST",
        url: "delet.php",
        data: {
            'id': nr
        }
    }).done(function(data) {
        showData();


    });
}
