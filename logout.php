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
session_destroy();
header('Location: index.php');
exit();