<?php
require_once 'model/funktionen.inc.php';
spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');

if($_POST != NULL){
    $ch = new Chat($_POST);
    $ch->setDatum(date("Y.m.d-H:i:s", time()));
    $ch->speichere();
}

if($_GET != NULL){
    $chats = Chat::findeLetztenZehn();
    $arr = array();
    foreach($chats as $ch){
        array_push($arr,array("name" => $ch->getName(),
                                  "text" => $ch->getText()));
    } 
    //print_r($arr);
    echo json_encode(array_reverse($arr));
}

