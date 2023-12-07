<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$schema = "schema"; // Substitua "seu_banco_de_dados" pelo nome do seu banco de dados

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $schema
);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $mensagem = $_POST["mensagem"];

    $stmt = $conexao->prepare("INSERT INTO tabela_contatos (nome, email, celular, mensagem) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $celular, $mensagem);

    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem: " . $stmt->error;
    }

    $stmt->close();
}

$conexao->close();
?>