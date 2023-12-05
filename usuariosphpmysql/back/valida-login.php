<?php

require_once "conexao.php";

$usu = $_POST['usu'];
$pass = $_POST['pass'];

if (isset($usu) && isset($pass) && $usu != "" && $pass != "") {

    $sql = "SELECT 
        usi_nome, 
        usi_senha
    FROM usuarios_simples 
    WHERE usi_nome = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('s', $usu);

    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {

        // Fetch_all retorna um array multidimensional, e não é necessário usar um loop neste caso.
        $linha = $resultado->fetch_all();

        if (password_verify($pass, $linha[0][1])) {
            
            $stmt->close();

            session_start();
            $_SESSION["logged"] = 1;
            $_SESSION["nome"] = $usu;

            exit("T");
        } else {

            // Senha incorreta
            exit("F");
        }
    } else {

        // Usuário não encontrado
        exit("F");
    }
} else {

    // Dados de login incompletos
    exit("F");
}

// Fechar o statement após todas as verificações
$stmt->close();

?>