<?php
class AjaxController extends AbstractBase
{
    //Sendet Daten in die Datenbank. 
    public function sendChatAktion()
    {
        if($_POST["name"] != ""){
            $chat = new Chat($_POST);
            $chat->setDatum(date("Y.m.d-H:i:s", time()));
            $chat->speichere();
        }
    }

    //Holt Daten von Datenbank.
    public function getChatAktion()
    {
        $allchats = Chat::findeLetztenZehn();
        $arr = array();
        foreach ($allchats as $ch) {
            array_push($arr, array(
                "name" => $ch->getName(),
                "text" => $ch->getText(),
                "datum" => " ".explode(" ",$ch->getDatum())[1]));
        }
        $this->addContext('chats', $arr);
    }
}
