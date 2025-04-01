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
    <title>Minha Loja</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <div class="produtos">
        <?php
        if ($resultado->num_rows > 0) {
            while ($produto = $resultado->fetch_assoc()) {
                echo "<div class='produto'>";
                echo "<h3>" . $produto['nome'] . "</h3>";
                echo "<p>Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>";
                echo "<p>Estoque: " . $produto['estoque'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhum produto disponível.</p>";
        }
        ?>
    </div>
</body>
</html>
