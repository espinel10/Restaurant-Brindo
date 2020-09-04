<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php 
    //SI LA SESIÓN NO ES VÁLIDA LO REDIRIGE AL INICIO
    include_once '../../scripts/clients/client_login_functions.php';
    isClientLoggedIn();
    ?>
    <h1>Cliente</h1>
    <?php 
    $lastTimeClient = $_SESSION['last_time_client'];
    // Verificación del tiempo de inactividad del usuario mediante una sesion de usuario
    // FORMATO  March 10, 2001, 5:16 pm
    echo 'Último acceso '.date("F j, Y, g:i a", $lastTimeClient);
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" >    
    <button type="submit" name="logout">Salir</button>    
    </form>

    <?php 
    if(array_key_exists('logout',$_POST)) 
    { 
        logoutClient();
    }
    ?>
</body>
</html>