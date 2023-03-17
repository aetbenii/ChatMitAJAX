<?php
class AjaxController extends AbstractBase{

    public function chatAktion(){

    }

    public function newChat(){
        if($_POST){
            $ch = new Chat($_POST);
            $ch->setDatum(date("Y.m.d-H:i:s", time()));
            $ch->speichere();
        }
    }

    public function getChat(){
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
    }
}