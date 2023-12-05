<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntariado</title>
    <link rel="shortcut icon" href="ico/casabrg.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <form action="back/sair.php" method="post">
                <button type="submit" class="btn btn-outline">Sair</button>
            </form>
        </div>
    </header>

    <main>
        <div class="container">
            <h1>Bem-vindo, <?= isset($_SESSION["logged"]) ? htmlspecialchars($_SESSION["nome"]) : "Visitante" ?>!</h1>

            <?php if (!isset($_SESSION["logged"])) { ?>
                <p>Explore nosso site e veja como você pode contribuir como voluntário!</p>
                <div class="img-container">
                    <img src="css/img2/404 Error Page not Found with people connecting a plug-cuate.png" alt="">
                </div>
                <div class="cta-buttons">
                    <a href="login.php" class="btn">Entrar</a>
                    <a href="signup.php" class="btn btn-outline">Cadastrar</a>
                    <a href="signup.php" class="btn btn-outline">Início</a>
                </div>
            <?php } else { ?>
                <p>Obrigado por se voluntariar! Seu apoio faz a diferença. Atualmente estamos sem vagas :( essa parte ainda está em manutenção</p>
            <?php } ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <!-- Adicione informações do rodapé, como links úteis, créditos, etc. -->
        </div>
            </footer>


            <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget({
          rootPah: '/app',
          personalization: 'https://vlibras.gov.br/config/default_logo.json',
          opacity: 0.5,
          position: 'BR',
          avatar: 'random',
      });
    </script>
</body>

</html>
