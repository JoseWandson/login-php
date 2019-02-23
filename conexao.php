<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'php');
define('SENHA', 'root');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');