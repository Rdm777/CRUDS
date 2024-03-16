<?php include "user-validar.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body class="flex">
    <div class="content flex">
        <div id="login-title">
            <h1 class="josefin-sans">Novo Usuario</h1>
        </div>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="flex">
            <input type="text" name="nome" placeholder="Nome" value="<?=$nome?>" class="open-sans">
            <input type="text" name="sobrenome" placeholder="Sobrenome" value="<?=$sobrenome?>" class="open-sans">
            <input type="number" name="telefone" placeholder="Telefone" value="<?=$telefone?>" class="open-sans">
            <input type="email" name="email" placeholder="Email" value="<?=$email?>" class="open-sans">
            <input type="password" name="senha" placeholder="Senha" class="open-sans" value="<?=$senha?>">
            <button type="submit" style="margin-top:2rem;">Adicionar</button>
        </form>
    </div>
    <!-- JS -->
    <script src="script.js"></script>
</body>
</html>


