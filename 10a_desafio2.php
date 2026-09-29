<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "exercicio";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $preco = $_POST["preco"];

    if ($nome == "") {
        $mensagem = "Erro: O nome do produto não pode estar vazio.";
    } elseif (!is_numeric($preco) || $preco <= 0) {
        $mensagem = "Erro: O preço deve ser um número positivo.";
    } else {

        $sql = "INSERT INTO produtos (nome, preco) VALUES (?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sd", $nome, $preco);

        if ($stmt->execute()) {
            $mensagem = "Produto cadastrado com sucesso!";
        } else {
            $mensagem = "Erro ao cadastrar o produto.";
        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>

    <h1>Cadastro de Produtos</h1>

    <?php
    if ($mensagem != "") {
        echo "<p>$mensagem</p>";
    }
    ?>

    <form method="POST">

        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome">

        <br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01">

        <br><br>

        <button type="submit">Cadastrar Produto</button>

    </form>

</body>
</html>