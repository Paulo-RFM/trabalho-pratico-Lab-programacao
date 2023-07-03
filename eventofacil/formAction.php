<?php

include "connect.inc.php";
include "Usuario.class.php";

if (empty($_POST['action'])) {
    $action = $_GET['action'];
    $id = $_GET['ID'];
} else {
    $action = $_POST['action'];
}

$usuario = new Usuario($conn);

if ($action == 'insert') {
    $usuario->create($_POST);
}

if ($action == 'update') {
    $usuario->update($_POST);
}

if ($action == 'delete') {
    $usuario->delete($id);
}

header('Location: home.php');

?>