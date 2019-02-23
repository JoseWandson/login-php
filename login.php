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

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$salt = "0Ja%_(mOXU-P@gPM!u@RO6bR*b$&NChau4nztP0*E%jMNYNIs%HRfIJ-F)MT^&y3";
$senhaCodificada = hash('sha512', $salt . $senha);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = '{$senhaCodificada}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}