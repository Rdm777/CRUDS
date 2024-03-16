<?php 

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION["id"])){
    die("Para de ser pilantra, vai la fazer seu <a href=\"index.php\">Login</a>");
}