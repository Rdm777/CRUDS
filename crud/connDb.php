<?php 

$hostname = "localhost";
$database = "cadastro";
$user = "root";
$password = "1335036A";

$conn = new mysqli($hostname, $user, $password, $database);
if ($conn->connect_errno){
    echo "Erro:  (" . $conn->connect_errno.")" . $conn->connect_error;
}else {
    //echo "<p style='color:white;'>Conexão realizada com sucesso</p>";
};