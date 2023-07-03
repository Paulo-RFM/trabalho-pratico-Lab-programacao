<?php

$host = "localhost";
$db_name = "eventofacildb";
$username = "root";
$password = "";

// Criar conexão
$conn = new mysqli($host, $username, $password, $db_name);

// Checar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>