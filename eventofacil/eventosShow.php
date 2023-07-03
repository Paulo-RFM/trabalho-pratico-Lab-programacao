<?php
    include ('connect.inc.php');
    include ('Evento.class.php');

    $evento = new Evento($conn);

    
    if (empty($_GET['page'])) {
        $page = 0;
    } else {
        $page = $_GET['page'];
    }
    
    $res = $evento->readEventos($page);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
        <th>img</th>
        <th>titulo</th>
        
    </thead>
    <?php 
    foreach ($res as $a) {
        echo("
            <tr>
            <td><img height=100 src='{$a['path']}' alt=''></td>
            <td><a href='eventoDetalhe.php?id={$a['id']}'>{$a['nome']}</a></td>
            
            </tr>   
        ");
    }
    ?>        
</table>


    <br>
    
</body>
</html>