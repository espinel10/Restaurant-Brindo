<?php
$enlace = mysqli_connect("localhost", "20201B103", "8FcDd67_Dg", "20201B103");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//SCRIPT PARA FORMATEAR LA BASE DE DATOS E INSERTAR MANUALMENTE, 
//CON EL ARCHIVO DE PHP 'insert_values.php' (normalmente) o 'chargingClients.php' de un .txt

//########### LAS TABLAS DEBEN ESTAR CREADAS abriendo el archivo create_table.php

$queryDropClients =  'DROP TABLE clients;';
$resultado = mysqli_query($enlace, $queryDropClients);

if (!$resultado) {
    die('La tablas no existen, por favor agregalos');
}


$queryDropEmployees =  'DROP TABLE employees;';
$resultado = mysqli_query($enlace, $queryDropEmployees);

if (!$resultado) {
    die('Error borrando las tablas');
}

$queryDropProducts =  'DROP TABLE products;';
$resultado = mysqli_query($enlace, $queryDropProducts);

if (!$resultado) {
    die('Error borrando las tablas');
}

$queryDropCategories =  'DROP TABLE categories;';
$resultado = mysqli_query($enlace, $queryDropCategories);

if (!$resultado) {
    die('Error borrando las tablas cat');
}

$queryDropOrders =  'DROP TABLE orders_products_clients;';
$resultado = mysqli_query($enlace, $queryDropOrders);

if (!$resultado) {
    die('Error borrando las tablas');
}

echo('Valores formateados!!');
mysqli_close($enlace);

?>