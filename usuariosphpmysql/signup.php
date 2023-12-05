<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/stylessignup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Fim Google Fonts -->
    <link rel="shortcut icon" href="ico/casabrg.ico" type="image/x-icon">
</head>
<body>
    <div class="flex">
        <div class="wrapper">
         <h1>CADASTRO</h1>
         <form id="cadastroForm" method="post">
            <input id="email" name="email" type="email" placeholder="E-mail" required>
            <input id="usu" name="usu" type="text" placeholder="Nome de Usuário" required>
            <input id="pass" name="pass" type="password" placeholder="Senha" required>
            <!-- Adicionando campos adicionais -->
            <input id="nomeCompleto" name="nomeCompleto" type="text" placeholder="Nome Completo" required>
            <input id="dataNascimento" name="dataNascimento" type="date" placeholder="Data de Nascimento" required>
            <input id="celular" name="celular" type="text" placeholder="Celular" required>
            <input id="telefoneFixo" name="telefoneFixo" type="text" placeholder="Telefone Fixo ou Emergencial" required>
            <input id="cep" name="cep" type="text" placeholder="CEP" required>
            <input id="rgCpf" name="rgCpf" type="text" placeholder="RG / CPF" required>
            <input id="situacaoAtual" name="situacaoAtual" type="text" placeholder="Situação Atual" required>
            <input id="participouVoluntario" name="participouVoluntario" type="text" placeholder="Já participou de trabalho voluntário?" required>
            <button type="submit" class="btn">Cadastrar</button>
        </form>
        <p id="invalid" style="color: red; display: none">Valores inválidos</p>
        <p id="redirect" style="color: green; display: none">Cadastrando...</p>
        <script src="js/signup.js"></script>
     </div>
    </div>
</body>
</html>