<?php

include "connect.inc.php";
include "Usuario.class.php";

$id = 0;

    $action = 'insert';
    $actionVal = "CADASTRAR";

$usuario = new Usuario($conn);

if (empty($edt)) {
    $edt[0]['nome'] = '';
    $edt[0]['email'] = '';
    $edt[0]['senha'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Evento Facil</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- Conteúdo -->
    <section class="container">
        <div class="formularioReg">
            <form action="formAction.php" method="post">
                <input type="hidden" name="action" value="<?php echo $action; ?>">
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="nome" placeholder="Nome" id="nome" value="<?php echo $edt[0]['nome']; ?>"required>
                </div><br>
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input type="text" name="email" placeholder="Email" id="email" value="<?php echo $edt[0]['email']; ?>"required>
                </div><br>
                <div class="input-container">
                    <i class="fa fa-lock icon"></i>            
                    <input type="text" name="senha" placeholder="Senha" id="senha" value="<?php echo $edt[0]['senha']; ?>"required>
                </div><br>
                <div class="input-container">
                    <input type="submit" id="btnCad_id" value="<?php echo $actionVal; ?>">
                </div>
            </form>
        </div>

        <script src="scripts.js"></script>
</body>

</html>