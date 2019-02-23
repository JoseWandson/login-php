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
if(isset($_SESSION['usuario'])) {
	header('Location: painel.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esqueci minha senha</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Esqueci minha senha</h3>
                    <div class="box">
                        <form action="envia_email.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>