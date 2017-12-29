<?php
/**
 * Created by PhpStorm.
 * User: robcyk
 * Date: 29.12.17
 * Time: 00:17
 */
?>
<h2 class="text-center">Klasa 1</h2>

<div class="row align-items-center justify-content-center">
    <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list"
               href="#list-home" onclick="viewGallery()" role="tab" aria-controls="home">Galeria</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
               href="#list-profile" role="tab" aria-controls="profile">Sprawdziany</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
               href="#list-messages" role="tab" onclick="newRecord()" aria-controls="messages">???</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
               href="#list-settings" role="tab" aria-controls="settings">???</a>
        </div>
    </div>

</div>

<div class="row align-items-center justify-content-center subcontent">

    <div class="col-12">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
        </div>
    </div>
</div>

