<?php 
session_start();
require 'Banco.php';

$email  = addslashes($_POST['email']);
$senha  = addslashes($_POST['password']);

$login  = new Banco;

$login->query("SELECT email, senha FROM usuario WHERE email = '$email' AND senha = '$senha'");

if($login->linha() > 0){

	$_SESSION['newUser'] = $senha;
	header('Location: /index.php');

}else{

	header('Location: /login.html');

}

?>