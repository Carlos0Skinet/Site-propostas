<?php

require_once 'conexao.php';

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$usu = isset($_POST["usu"]) ? $_POST["usu"] : "";
$pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
$nomeCompleto = isset($_POST["nomeCompleto"]) ? $_POST["nomeCompleto"] : "";
$dataNascimento = isset($_POST["dataNascimento"]) ? $_POST["dataNascimento"] : "";
$celular = isset($_POST["celular"]) ? $_POST["celular"] : "";
$telefoneFixo = isset($_POST["telefoneFixo"]) ? $_POST["telefoneFixo"] : "";
$cep = isset($_POST["cep"]) ? $_POST["cep"] : "";
$rgCpf = isset($_POST["rgCpf"]) ? $_POST["rgCpf"] : "";
$situacaoAtual = isset($_POST["situacaoAtual"]) ? $_POST["situacaoAtual"] : "";
$participouVoluntario = isset($_POST["participouVoluntario"]) ? $_POST["participouVoluntario"] : "";

$dataCadastro = date("Y-m-d");

if (
    $usu != "" &&
    $pass != "" &&
    $nomeCompleto != "" &&
    $dataNascimento != "" &&
    $celular != "" &&
    $telefoneFixo != "" &&
    $cep != "" &&
    $rgCpf != "" &&
    $situacaoAtual != "" &&
    $participouVoluntario != ""
) {
    // Verificar se o e-mail já existe
    $sqlVerificaEmail = 'SELECT COUNT(*) FROM usuarios_simples WHERE usi_email = ?';
    $stmtVerificaEmail = $conexao->prepare($sqlVerificaEmail);
    $stmtVerificaEmail->bind_param('s', $email);
    $stmtVerificaEmail->execute();
    $stmtVerificaEmail->bind_result($contagemEmail);
    $stmtVerificaEmail->fetch();
    $stmtVerificaEmail->close();

    if ($contagemEmail > 0) {
        exit("E-mail já cadastrado.");
    }

    // Verificar se o nome de usuário já existe
    $sqlVerificaUsuario = 'SELECT COUNT(*) FROM usuarios_simples WHERE usi_nome = ?';
    $stmtVerificaUsuario = $conexao->prepare($sqlVerificaUsuario);
    $stmtVerificaUsuario->bind_param('s', $usu);
    $stmtVerificaUsuario->execute();
    $stmtVerificaUsuario->bind_result($contagemUsuario);
    $stmtVerificaUsuario->fetch();
    $stmtVerificaUsuario->close();

    if ($contagemUsuario > 0) {
        exit("Nome de usuário já cadastrado.");
    }

    // Se não existir, realizar o cadastro
    $passHash = password_hash($pass, PASSWORD_BCRYPT);

    $sqlCadastro = 'INSERT INTO usuarios_simples (
        usi_nome,
        usi_email,
        usi_senha,
        usi_data_cadastro,
        usi_nome_completo,
        usi_data_nascimento,
        usi_celular,
        usi_telefone_fixo,
        usi_cep,
        usi_rg_cpf,
        usi_situacao_atual,
        usi_participou_voluntario
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

    $stmtCadastro = $conexao->prepare($sqlCadastro);
    $stmtCadastro->bind_param(
        'ssssssssssss',
        $usu,
        $email,
        $passHash,
        $dataCadastro,
        $nomeCompleto,
        $dataNascimento,
        $celular,
        $telefoneFixo,
        $cep,
        $rgCpf,
        $situacaoAtual,
        $participouVoluntario
    );

    $exeCadastro = $stmtCadastro->execute();

    if ($exeCadastro) {
        $stmtCadastro->close();
        exit("T");
    } else {
        exit("Erro ao cadastrar usuário.");
    }
} else {
    exit("F");
}

?>