<?php
// Conecte-se ao banco de dados
include ('connect.inc.php');

// Recupere o ID do evento da URL
$id = $_GET['id'];

// Execute uma consulta SQL para recuperar as informações do evento com base no ID do evento
$sql = "SELECT * FROM evento WHERE id = $id";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    // Exiba as informações do evento em uma tabela HTML
    while($linha = $resultado->fetch_assoc()) {
        echo "<table>";
        echo "<tr><img height=300 src='{$linha['path']}' alt=''></tr>";
        echo "<tr><td>Nome:</td><td>" . $linha['nome'] . "</td></tr>";
        echo "<tr><td>Descrição:</td><td>" . $linha['descricao'] . "</td></tr>";
        echo "<tr><td>Data:</td><td>" . $linha['data'] . "</td></tr>";
        echo "</table>";
    }
} else {
    echo "Nenhum evento encontrado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
