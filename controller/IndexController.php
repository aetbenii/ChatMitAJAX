<?php

class IndexController extends AbstractBase{

// Alle Seminartermine auslesen
public function loginAktion(){
  
}

public function chatAktion(){
    $this->addContext("chat", Chat::findeAlle());
}

}

