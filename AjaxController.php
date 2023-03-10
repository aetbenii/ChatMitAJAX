<?php
require_once 'model/funktionen.inc.php';
spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');

if($_POST != NULL){
    $ch = new Chat($_POST);
    $ch->speichere();
}

if($_GET != NULL){
    $chats = Chat::findeAlle();
    $arr = array();
    foreach($chats as $ch){
        array_push($arr,);
    }
    

echo json_encode();
    
    
}

