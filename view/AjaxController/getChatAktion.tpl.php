<?php

$chats = Chat::findeLetztenZehn();
    $arr = array();
    foreach($chats as $ch){
        array_push($arr,array("name" => $ch->getName(),
                                  "text" => $ch->getText()));
    } 
    //print_r($arr);
    echo json_encode(array_reverse($arr));

    // als string machen //
