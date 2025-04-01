<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos (nome, preco, estoque) VALUES ('$nome', '$preco', '$estoque')";
    if ($conexao->query($sql) === TRUE) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar produto: " . $conexao->error;
    }
}
?>
<a href="dashboard.php">Voltar</a>
