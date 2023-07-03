<?php

include "connect.inc.php";
include "Usuario.class.php";
include "session.php";

$id = 0;

$usuario = new Usuario($conn);

var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Eventos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Barra de pesquisa -->
    <div class="search-container">
        <input type="text" placeholder="Pesquisar eventos, shows, festas..." id="search_bar">
        <div class="btn_top">
            <button id="btn-login" type="button" color="default" class="btn_userhome" tabindex="0" onclick="window.location.href = '<?php echo isset($_SESSION['logado']) ? "perfilUsuario.php" : "login.php"; ?>'"><?php echo isset($_SESSION['logado']) ? "Perfil" : "Login" ?></button>
            <button id="btn-create-account" type="button"color="default" class="btn_userhome" tabindex="0" onclick="window.location.href = '<?php echo isset($_SESSION['logado']) ? "logout.php" : "registration.php"; ?>'"><?php echo isset($_SESSION['logado']) ? "Logout" : "cadastrar" ?></button>
        </div>
    </div>
    <!-- Matriz de eventos em destaque -->
    <div class='eventos'>
        <h2>Eventos em Destaque</h2>
        <?php include('eventosShow.php'); ?>
    </div>


    <!-- Scripts -->
    <script src="script.js"></script>
</body>

</html>