<?php

if($_POST != NULL){
    $ch = new Chat($_POST);
    $ch->speichere();
}

if($_GET != NULL){
    var_dump(Chat::findeAlle());
}

