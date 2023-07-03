<?php

include "connect.inc.php";

if (isset($_POST['email']) || isset($_POST['senha'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql_code = "select * from usuario where email = '$email' and senha = '$senha'";
    $sql_query = $conn->query($sql_code) or die("erro ao executar a query");
    $qtd = $sql_query->num_rows;

    if ($qtd == 1) {
        include "session.php";
        $usuario = $sql_query->fetch_assoc();
       
        $id = $usuario['id'];
        $_SESSION['usuario'] = $usuario['nome'];
        $_SESSION['logado'] = true;
        $_SESSION['ident'] = $id; 
        $_SESSION['senha'] = $_POST['senha'];
        header('Location: home.php');

    }else{
        header('Location: login.php');

    }

} else {
    echo "erro cabuloso";
}

?>

<script src="script.js"></script>
