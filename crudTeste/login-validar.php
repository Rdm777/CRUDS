<?php
include "connDb.php";
$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";


// ============================================
// Autenticação Login
// ============================================

if (isset($_POST["email"]) || isset($_POST["senha"])) {

    if (empty($email) & empty($senha)) {
        echo "<p class=\"echo-php open-sans\">Preencha todos os campos</p>";
    } else if (empty($email)) {
        echo "<p class=\"echo-php open-sans\">E-mail em branco</p>";
    } else if (empty($senha)) {
        echo "<p class=\"echo-php open-sans\">Senha em branco</p>";
    } else {

        $email = $mysqli->real_escape_string($email);
        $senha = $mysqli->real_escape_string($senha);

        // Realizando a Query
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código");

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            echo json_encode($quantidade);

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["id"] = $usuario["id"];
            $_SESSION["email"] = $usuario["email"];


            echo "<script>alert('Login realizado com Sucesso')</script>";
            echo "<script>location.href='pageInicial-Info.php?page=listar';</script>";
        } else {
            echo "<p>Email ou senha invalidos</p>";
        }
    }
}

