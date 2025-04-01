<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id=$id";
    if ($conexao->query($sql) === TRUE) {
        echo "Produto removido!";
    } else {
        echo "Erro ao remover produto: " . $conexao->error;
    }
}
?>
<a href="dashboard.php">Voltar</a>
