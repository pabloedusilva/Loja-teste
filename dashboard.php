<?php
include 'conexao.php';

// Buscar produtos
$sql = "SELECT * FROM produtos";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Painel de Controle</h1>
    
    <h2>Adicionar Produto</h2>
    <form action="adicionar_produto.php" method="post">
        <input type="text" name="nome" placeholder="Nome do Produto" required>
        <input type="number" name="preco" placeholder="Preço" required>
        <input type="number" name="estoque" placeholder="Estoque" required>
        <button type="submit">Adicionar</button>
    </form>

    <h2>Gerenciar Produtos</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
        <?php while ($produto = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
            <td><?= $produto['estoque'] ?></td>
            <td>
                <a href="remover_produto.php?id=<?= $produto['id'] ?>">Remover</a>
                <a href="atualizar_produto.php?id=<?= $produto['id'] ?>">Editar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
