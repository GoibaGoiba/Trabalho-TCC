<?php

$host = "10.140.170.183";
$usuario = "root";
$senha = "123456"; 
$banco = "netuno";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>