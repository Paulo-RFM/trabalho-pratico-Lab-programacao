
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
        <div class="formulario">
            <form action="loginAction.php" method="post">
                <input type="hidden" name="action" value="<?php echo $action; ?>">
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input type="text" name="email" placeholder="Email" id="email"required>
                </div><br>
                <div class="input-container">
                    <i class="fa fa-lock icon"></i>            
                    <input type="text" name="senha" placeholder="Senha" id="senha"required>
                </div><br>
                <div class="input-container">
                    <input type="submit" id="btnLogin_id" value= Login>
                </div>
            </form>
        </div>

        <script src="scripts.js"></script>
</body>

</html>