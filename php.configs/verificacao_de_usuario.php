<?php 
require 'Banco.php';

$email  = addslashes($_POST['email']);
$senha  = addslashes($_POST['password']);

$login  = new Banco;

$login->query("SELECT email, senha FROM alunos WHERE email = '$email' AND senha = '$senha'");

if($login->linha() > 0){

	header('Location: /index.html');

}else{

	header('Location: /login.html');

}

?>