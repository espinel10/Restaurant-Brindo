<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<?php     
    include_once '../../scripts/employees/employee_login_functions.php';
    isEmployeeLoggedIn();
    ?>

    <h1>Empleado</h1>
    <?php 
    $lastTimeEmployee = $_SESSION['last_time_employee'];
    // Verificación del tiempo de inactividad del usuario mediante una sesion de usuario
    // FORMATO  March 10, 2001, 5:16 pm
    echo 'Último acceso '.date("F j, Y, g:i a", $lastTimeEmployee);
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" >    
    <button type="submit" name="logout">Salir</button>    
    </form>

    <?php 
    if(array_key_exists('logout',$_POST)) 
    { 
        logoutEmployee();
    }
    ?>
</body>
</html>