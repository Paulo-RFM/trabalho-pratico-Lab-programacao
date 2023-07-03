<?php
    include ('connect.inc.php');
    

    if(isset($_FILES['arquivo'])){
        $arquivo = $_FILES['arquivo'];
        if($arquivo['error']){
            die("Erro ao enviar arquivo");
        }

        $pasta = "imagens/";
        $nomeArquivo = $arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != 'png')
            die("favor inserir uma imagem");

        $path = $pasta . $novoNomeArquivo . "." . $extensao;
        $salvar = move_uploaded_file($arquivo["tmp_name"], $path);
        $nome = $_POST["nome"];
        $descricao = $_POST['descricao'];
        $dateEv = $_POST['data'];
        if($salvar){
            $conn->query("INSERT INTO evento (nome, descricao, path, data, dataEvento) VALUES('$nome','$descricao','$path',now(),'{$_POST['data']}')");
            //echo "arquivo enviado com sucesso";
        }else{
            echo "ops.. algo deu arrado. nao foi possivel enviar o arquivo";
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="create.js"></script>
    <title>Novo Evento</title>
</head>
<body>
    <input type="hidden" id="screen" value="create_news">
    
    <h1>Novo evento</h1>
    <form enctype = "multipart/form-data" action="" method="POST">
        <input type="hidden" name="action" value="insert">
        <div class="form-line">
            <label for="titulo">Título do evento:</label>
            <input type="text" id="nome" name ="nome">
        </div>
        <div class="form-line">
            <label for="text">descricao do evento:</label>
            <textarea id="descricao" name="descricao" cols="30" rows="10"></textarea>
        </div>
        <div class="form-line">
            <label for="preco">preco:</label>
            <input type= number" id="preco" name ="preco">
        </div>
        <div class="form-line">
            <label for="data">Data:</label>
            <input type= "date" id="dataEvento" name ="data">
        </div>
        <div>
            <label for="image">Imagem do evento:</label>
            <input type="file" id="path" name="arquivo">
        </div>
        <button type="submit" name="upload">Criar novo evento</button>
    </form>

    <?php include ('eventosShow.php'); ?>
</body>
</html>