<?php
if($_POST){
    $ch = new Chat($_POST);
    $ch->setDatum(date("Y.m.d-H:i:s", time()));
    $ch->speichere();
}