<?php include "login-validar.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre ou cadastre-se</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body class="flex">
    <div class="content flex">
        <div id="login-title">
            <h1 class="josefin-sans">Login</h1>
        </div>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="flex">
            <input type="email" name="email" placeholder="Email" value="<?=$email?>" class="open-sans">
            <input type="password" name="senha" placeholder="Senha" class="open-sans">
            <p class="open-sans trocar-senha">Trocar <a href="newPassword.php">Senha</a></p>
            <button>Entrar</button>
            <p class="open-sans">Ainda não tem uma conta? <a href="conta-add.php">Criar</a></p>
            
        </form>
    </div>
    <!-- JS -->
    <script src="script.js"></script>
</body>

</html>
