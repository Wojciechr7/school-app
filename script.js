var notepadExpanded = false;
var time = new Date();
var lastSave = time.getSeconds();
var saving = false;

$(document).ready(function() {
    showData();

    showImages();
    getNotepadData()
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

function getNotepadData() {
    $.ajax({
        type: "POST",
        url: "getNotepad.php"
    }).done(function(data) {

        $('#paper-cnt').val(data);

    });





}


function toggleNotepad() {

        if(!notepadExpanded) {
            $('.paper').css('right', '3%');
            notepadExpanded = true;
        }
        else
        {
            $('.paper').css('right', '-67%');
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

function prepateToSave() {
    if(!saving) {
        $('.saving-info').text("zapisywanie...");
        saving = true;
        setTimeout(function() {
            saveNotepad();
            $('.saving-info').text("zapisano");
            saving = false;
        }, 3000);
    }

}

function saveNotepad() {

        $.ajax({
            type: "POST",
            url: "saveNotepad.php",
            data: {
                'notepadValue': $('#paper-cnt').val()
            }
        }).done(function(data) {

        });

}