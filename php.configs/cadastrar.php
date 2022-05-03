<?php
session_start();
require "Banco.php";


if (isset($_POST['username']) && !empty($_POST['username']) || isset($_POST['password']) && !empty($_POST['password']) || isset($_POST['email']) && !empty($_POST['email'])) {
    

    $nome   = addslashes($_POST['username']);
    $senha  = addslashes($_POST['password']);
    $email  = addslashes($_POST['email']);

    $cad = new Banco;
    $cad->query("INSERT INTO usuario (user_name, email, senha) VALUES ('$nome', '$email', '$senha'); UPDATE usuario; SELECT user_name FROM usuario WHERE user_name = '$nome'");

    if ($cad->linha() > 0) {
        $_SESSION['newUser'] = $nome;
        header('Location: /login.html');
    }


}if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {

    $_SESSION['error_camp_empty'] = "todos os campos são obrigatório";
    header('Location: /cadastro.html');
    
}

?>