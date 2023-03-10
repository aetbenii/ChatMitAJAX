<?php
require_once 'model/funktionen.inc.php';
spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');


//echo $_POST['text'];
//var_dump($_POST['post']);
//$chat = Chat::findeAlle();
//var_dump(Chat::findeAlle());
// $ch = new Chat(array(
//     "name" => $data[0],
//     "text" => $data[1],
//     "datum" => $data[2]
// ));

$ch = new Chat($_POST);

$ch->speichere();



//echo $chat[0]->getName();
?>