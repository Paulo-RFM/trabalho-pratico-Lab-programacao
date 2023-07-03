<?php
include('connect.inc.php');
include "session.php";
include "protect.php";

$nome = "";
$email = "";
$senha = "";

    $id = $_SESSION['ident'];

    $sqlSelect = "SELECT nome, email, senha FROM usuario WHERE id=$id";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows == 1) {
        $usuario = $result->fetch_assoc();
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $senha = $usuario['senha'];


    }


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Na tag <title> deve entra o nome do usuario (usar o PHP pra fazer isso) -->
    <title>Usuário</title>
</head>

<body>
    <input type="hidden" id="screen" value="my_profile">
    <h1>Informações do Usuário</h1>
    <h2>Nome:
        <?php echo $nome; ?>
    </h2>
    <h2>Email:
        <?php echo $email; ?>
    </h2>
    <h2>senha:
        <?php echo $senha; ?>
    </h2>


    <a href="editUsuario.php?user=<?php echo $current_user ?>"><button>Editar usuário</button></a>

</body>

</html>