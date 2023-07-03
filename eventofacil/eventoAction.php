<?php

include "connect.inc.php";
include "Evento.class.php";


var_dump($_POST);
if (empty($_POST)) {
    $action = $_POST['action'];
    $id = $_POST['id'];
} else {
    $action = $_POST['action'];
}

$evento = new Evento($conn);

if ($action == 'insert') {
    $evento->create($_POST);
}



//header('Location: home.php');

?>