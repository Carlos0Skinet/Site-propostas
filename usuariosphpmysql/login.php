<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Fim Google Fonts -->
    <link rel="shortcut icon" href="ico/casabrg.ico" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <form id="loginForm">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" id="usu" placeholder="Usuário" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="pass" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Me Lembre</label>
            </div>
            <div class="register-link">
                <p>Não tem uma conta? <a href="signup.php">Registrar</a></p>
            </div>
            <input type="submit" id="btn" value="Entrar" class="btn">
            <p id="invalid" style="color: red; display: none">Credenciais inválidas</p>
            <p id="redirect" style="color: green; display: none">Redirecionando...</p>
        </form>
    </div>
    <script src="js/login.js"></script>
</body>
</html>