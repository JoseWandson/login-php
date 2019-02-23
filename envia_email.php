<?php
$currentCookieParams = session_get_cookie_params(); 
session_set_cookie_params( 
    $currentCookieParams["lifetime"], 
    $currentCookieParams["path"], 
    $currentCookieParams["domain"],
    true, 
    true
);
session_start();
include('conexao.php');

if(empty($_POST['usuario'])) {
	header('Location: esqueci_minha_senha.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);

$_SESSION['esqueci_minha_senha'] = $usuario . ', verifica seu e-mail para recuperar a senha.';
header('Location: index.php');
exit();