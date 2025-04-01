<?php
$servidor = "sql301.infinityfree.com";
$usuario = "if0_38652519";
$senha = "iadDXWWDt3yh0";
$banco = "if0_38652519_produtos";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
$conexao->set_charset("utf8");
?>
