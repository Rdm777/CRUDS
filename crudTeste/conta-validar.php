<?php
include("connDb.php");
$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$telefone = $_POST["telefone"] ?? "";
$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

// ============================================
// Autenticação Nova Conta
// ============================================

if (isset($nome) || isset($sobrenome) || isset($telefone) || isset($email) || isset($senha)) {

    if (empty($nome) & empty($sobrenome) & empty($email) & empty($senha)) {
        echo "<p class=\"echo-php open-sans\">Preencha todos os campos</p>";
    } else if (empty($nome)) {
        echo "<p class=\"echo-php open-sans\">Campo em branco: Nome</p>";
    } else if (empty($sobrenome)) {
        echo "<p class=\"echo-php open-sans\">Campo em branco: Sobrenome</p>";
    } else if (empty($telefone)) {
        echo "<p class=\"echo-php open-sans\">Campo em branco: Telefone</p>";
    } else if (empty($email)) {
        echo "<p class=\"echo-php open-sans\">Campo em branco: Email</p>";
    } else if (empty($senha)) {
        echo "<p class=\"echo-php open-sans\">Campo em branco: Senha</p>";
    } else {
        // Verificar usuario
        $email = $mysqli->real_escape_string($email);
        $senha = $mysqli->escape_string($senha);

        // Criptografar Senha
        $senha = md5($_POST["senha"] ?? "");

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo");

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            echo "<p style='color:white;'>Usuario já cadastrado, faça login</p>";
        }

        // Salvar e ir para Homepage
        else {
            $query = mysqli_query($mysqli, "INSERT INTO cadastro.usuarios (nome, sobrenome, telefone ,email, senha) VALUES ('$nome', '$sobrenome', '$telefone' ,'$email', '$senha') ");

            if ($query) {
                echo "<script>alert('Login realizado com Sucesso')</script>";
                echo "<script>location.href='inicio.php?page=listar';</script>";
            } else {
                echo "Erro" . $mysqli->error;
            }
        }
    }
}