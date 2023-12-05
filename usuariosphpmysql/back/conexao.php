<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$schema = "schema";

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $schema
);
?>