<?php
// inclui das functions:
require 'functions.php';

// Resgata variáveis do formulário do form-login.php:
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Caso falte algum parametro:
if (empty($email) || empty($password)){
    echo "Enter a valid email and password";
    //header('Refresh:5; form-login.php');
    exit;
}

if($email == "AlexRF@fatecpg.com" && $password == "123"){
    session_start();
    $_SESSION['logged_in'] = true;
    
    echo "Login realizado com sucesso!";
} else {
    echo "E-Mail ou Senha incorreto!";
}?>
</br><a href="index.php">Voltar para a home!</a> 

