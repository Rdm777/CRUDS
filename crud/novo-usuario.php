<?php include "var-usuario.php" ?>
<h1>Novo Usuario</h1>

<form action="?page=novo" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome" class="mt-3" >Nome</label>
        <input type="text" name="nome" class="form-control">

        <label for="sobrenome" class="mt-2">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control">

        <label for="telefone" class="mt-2">Telefone</label>
        <input type="number" name="telefone" class="form-control">

        <label for="email" class="mt-2">Email</label>
        <input type="email" name="email" class="form-control">

        <label for="senha" class="mt-2">Senha</label>
        <input type="password" name="senha" class="form-control">

        <button type="submit" class="btn btn-secondary mt-3"> Cadastrar </button>
    </div>
</form>