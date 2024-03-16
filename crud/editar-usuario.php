<?php 
$sql = "SELECT * FROM usuarios WHERE id=" . $_GET['id'];
$res_query = $conn->query($sql);
$row = $res_query->fetch_object();
?>

<h1>Editar Usuario</h1>

<form action="?page=novo" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome" class="mt-3">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?=$row -> nome?>">

        <label for="sobrenome" class="mt-2">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" value="<?=$row -> sobrenome?>">

        <label for="telefone" class="mt-2">Telefone</label>
        <input type="number" name="telefone" class="form-control" value="<?=$row -> telefone?>">

        <label for="email" class="mt-2">Email</label>
        <input type="email" name="email" class="form-control" value="<?=$row -> email?>">

        <label for="senha" class="mt-2">Senha</label>
        <input type="password" name="senha" class="form-control" value="<?=$row -> senha?>">

        <button type="submit" class="btn btn-secondary mt-3"> Cadastrar </button>
    </div>
</form>