<?php
include('connect.inc.php');
include('session.php');
include('protect.php');

// Verifica se o parâmetro 'user' foi passado pela URL
if (!empty($_GET['user'])) {
    $id = $_GET['user'];

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtém os valores do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Atualiza os dados do usuário no banco de dados
        $sqlUpdate = "UPDATE usuario SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
        if ($conn->query($sqlUpdate) === TRUE) {
            // Redireciona de volta para a página de perfil do usuário
            header("Location: perfilUsuario.php?user=$id");
            exit();
        } else {
            echo "Erro ao atualizar o usuário: " . $conn->error;
        }
    }

    // Consulta os dados do usuário atual
    $sqlSelect = "SELECT nome, email, senha FROM usuario WHERE id=$id";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
        }
    } else {
        echo "Usuário não encontrado";
    }
} else {
    echo "ID do usuário não especificado";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>

<body>
    <h1>Editar Usuário</h1>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="<?php echo $senha; ?>"><br>

        <button type="submit">Salvar</button>
    </form>
</body>

</html>
