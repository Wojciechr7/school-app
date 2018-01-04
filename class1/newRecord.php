<?php
/**
 * Created by PhpStorm.
 * User: robcyk
 * Date: 29.12.17
 * Time: 01:25
 */
?>



<br><br>
<div class="entry-controls">
<button class="btn btn-success" onclick="insertTable()"><i class="fa fa-plus"></i>  dodaj nowe</button>
<input disabled type="text" id="id" placeholder="id">
<input type="text" id="imie" placeholder="imie" onkeydown = "if (event.keyCode == 13) insertTable()">
<input type="text" id="nazwisko" placeholder="nazwisko" onkeydown = "if (event.keyCode == 13) insertTable()">
<input id="profileForm" type="text" class="rok" placeholder="YYYY/MM/DD"
       data-fv-date="true"
       data-fv-date-format="YYYY/MM/DD"
       data-fv-date-message="The value is not a valid date"
       onkeydown = "if (event.keyCode == 13) insertTable()">
</div>
<div id="table-space"></div>
<div id="miejsce"></div>
