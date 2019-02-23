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
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>