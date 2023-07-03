<?php 

include "connect.inc.php";
include "Usuario.class.php";

$id = 0;

if (empty($_GET['action'])) {
    $action = 'insert';
    $actionVal = "CADASTRAR";
} else {
    $action = $_GET['action'];    
    $actionVal = "ATUALIZAR";
    $id = $_GET['ID'];    
}

$aluno = new Usuario($conn);

if (empty($_GET['page'])) {
    $page = 0;
} else {
    $page = $_GET['page'];
}
$total = $aluno->getNumRegistros();
$totalRegistros = $total[0]['total'];

$numPages = ceil($totalRegistros/5);

$res = $aluno->readPag($page);

$edt = $aluno->readOne($id);

if (empty($edt)) {
    $edt[0]['id'] = '';
    $edt[0]['nome'] = '';
    $edt[0]['email'] = '';
    $edt[0]['senha'] = '';
}

?>

<!-- ##################################################################################### -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>Evento Facil</title>

  <link rel="stylesheet" href="styles.css">
</head>
<body>
<!-- Conteúdo -->
<section class="container">
    <div class="formulario">
    <form action="formAction.php" method="post" >
            <input type="hidden" name="ID" value="<?php echo $edt[0]['id']; ?>">
            <input type="hidden" name="action" value="<?php echo $action; ?>">
            Nome: <input type="text" name="nome" id="nome" value="<?php echo $edt[0]['nome']; ?>"><br>
            Email: <input type="text" name="email" id="email" value="<?php echo $edt[0]['email']; ?>"><br>
            Senha: <input type="text" name="senha" id="senha" value="<?php echo $edt[0]['senha']; ?>"><br>
            <input type="submit" value="<?php echo $actionVal; ?>">
        </form>     
    </div>
</section>

<!-- Lista -->
<section class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>senha</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>

        <?php 
        foreach ($res as $a) {
            echo("
                <tr>
                <td>{$a['id']}</td>
                <td>{$a['nome']}</td>
                <td>{$a['senha']}</td>
                <td><a href='usuarios.php?action=update&ID={$a['id']}'>E</a></td>
                <td><a href='formAction.php?action=delete&ID={$a['id']}'>X</a></td>
                </tr>   
            ");
        }
        ?>        
    </table>

    <br>
    <?php 
    for ($i=0; $i<$numPages; $i++) {
        echo("<a href='index.php?page=$i'>" . $i+1 . "</a>&nbsp;&nbsp;");
    }
    ?> 
</section>

<script src="script.js"></script>
</body>
</html>


