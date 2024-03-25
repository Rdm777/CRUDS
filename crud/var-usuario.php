<?php
switch($_POST["acao"] ?? ""){
    case "cadastrar":
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $email = $conn -> real_escape_string($email);
        $senha = $conn -> real_escape_string($senha);

        $senha = md5($_POST["senha"] ?? "");

        $sql = "INSERT INTO  usuarios (nome, sobrenome, telefone, email, senha) VALUES ('$nome', '$sobrenome', '$telefone', '$email', '$senha')";

        $res_query = $conn -> query($sql) or die ("Erro ao executar.");


        if($res_query){
            echo "<script>alert('Login realizado com Sucesso')</script>";
        }else{
            echo "Erro." . $conn->error;
        }

    case "editar":
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];


        $email = $conn -> real_escape_string($email);
        $senha = $conn -> real_escape_string($senha);

        $senha = md5($_POST["senha"] ?? "");

        $sql = "UPDATE  usuarios SET
                    nome='$nome',
                    sobrenome='$sobrenome',
                    telefone='$telefone',
                    email='$email',
                    senha='$senha'
                WHERE 
                    id=" . $_REQUEST['id'];

        $res_query = $conn -> query($sql) or die ("Erro ao executar.");

        if($res_query){
            echo "<script>alert('Editado com Sucesso')</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else{
            echo "Não foi poassivel editar" . $conn->error;
        }

        break;

    case "excuir":

        break;

    default:

        break;
}