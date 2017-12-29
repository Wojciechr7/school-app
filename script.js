$(document).ready(function() {
    showData();

    showImages();

    setTimeout(function() {
        $('.menu').trigger('click');
    },0);


});



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