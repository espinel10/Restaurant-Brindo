<?php
$enlace = mysqli_connect("localhost", "20201B103", "8FcDd67_Dg", "20201B103");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//INSERTA LAS CATEGORÍAS
$queryCategories =  'INSERT INTO categories 
(id_category, category, description, photo) VALUES
(1, "Hamburguesas", "Las mejores hamburguesas de Bucaramanga", "https://recipes-secure-graphics.grocerywebsite.com/0_GraphicsRecipes/4589_4k.jpg"), 
(2, "Bebidas", "Productos postobon y jugos naturales", "https://i.ytimg.com/vi/pTdlujTWpB4/maxresdefault.jpg"), 
(3, "Acompañantes", NULL, "https://img-global.cpcdn.com/recipes/c722ba336c392024/400x400cq70/photo.jpg"),
(4, "Carnes y más", NULL, "https://i.ytimg.com/vi/O3Xv3Mnk1Nk/hqdefault.jpg");';
$resultado = mysqli_query($enlace, $queryCategories);

if (!$resultado) {
    die('Error, insertando categorias, ANTES DEBES CREAR LAS TABLAS, create_table.php o los valores ya existen');

}


//INSERTA LOS CLIENTES
$queryClients =  'INSERT INTO clients 
(id_client, first_name, last_name, CC, email, password, phone, age, photo) 
VALUES
(10, "Felipe", "Cabeza", "1234567890", "felipecabezas98@gmail.com", "hola1234", "3204408369", 22, "https://avatars1.githubusercontent.com/u/39039427?s=400&u=2f8287f42df63ddfe276ef7628dc6cf8665ed759&v=4"), 
(20, "Laura", "Mantilla", "987654321", "lauramantilla@gmail.com", "hola1234", "3167053118", 21, "https://laverdadnoticias.com/__export/1588106073332/sites/laverdad/img/2020/04/28/mia_khalifa_preocupa_a_sus_fans.jpg_1902800913.jpg");';
$resultado = mysqli_query($enlace, $queryClients);

if (!$resultado) {
    die('Error, insertando clientes');
}


//INSERTA LOS EMPLEADOS
$queryEmployees =  'INSERT INTO employees 
(id_employee, first_name, last_name, CC, password, phone, age, photo) 
VALUES
(100, "Geyner", "Rojas", "1234512345", "hola4321", "3114413437", 21, "https://www.prensalibre.com/wp-content/uploads/2018/12/afa2268e-f4dc-411b-b150-1d850801b2a4.jpg?quality=82&w=760&h=430&crop=1");';
$resultado = mysqli_query($enlace, $queryEmployees);

if (!$resultado) {
    die('Error, insertando empleados');
}


//INSERTA LOS PRODUCTOS
$queryProducts =  'INSERT INTO products 
(id_product, name, description, price, score, votters, photo, id_category) 
VALUES
(1000, "Hamburguesa doble carne", "300g de carne, deliciosa hamburguesa con tomate, jamón, queso y cebolla", 20000, 4.2, 2, "https://www.west24horas.com/wp-content/uploads/2019/12/doble-carne.png", 1),
(2000, "Rock Burguer", "350g de carne, deliciosa hamburguesa con tomate, huevo frito jamón, queso y cebolla para repetir", 22000, 4.5, 6, "https://media-cdn.tripadvisor.com/media/photo-s/07/1d/ee/ce/rock-burger-milano.jpg", 1),
(3000, "Limonada hierbabuena", "Deliciosa limonada natural para mantenerte saludable", 7000, 4.1, 1, "https://img-global.cpcdn.com/recipes/9533711ac3f3d8c3/751x532cq70/limonada-de-hierbabuena-con-notas-de-jengibre-foto-principal.jpg", 2),
(4000, "Gaseosa Hipinto 350ml", "Gaseosa hipinto de 250ml o 350ml sabores kola y piña", 4000, 3.8, 4, "https://tomatelavida.com.co/wp-content/uploads/2018/06/pin%CC%83a-f_Mesa-de-trabajo-1-copia.jpg", 2),
(5000, "Papas locas", "Deliciosas papas locas para acompañar tus platos", 12000, 4.3, 5, "https://img-global.cpcdn.com/recipes/c722ba336c392024/400x400cq70/photo.jpg", 3),
(6000, "Papas a la francesa", "Deliciosas papas a la francesa para acompañar tus platos", 7000, 4.1, 10, "https://i.ytimg.com/vi/qpA5tTDtuG4/maxresdefault.jpg", 3),
(7000, "Carne a la plancha", "400 g de carne a la plancha a tu medida", 24000, 4.4, 6, "https://www.carniceriapedrorivas.com/img/cms/2960016764_9a13d8b1b3_b.jpg", 4),
(8000, "Pechuga gratinada", "200 g de pechuga gratinada acompañada de arepa, ensalada y papa criolla", 20000, 4.8, 13, "https://dondemanuel.co/wp-content/uploads/2018/01/pechuga-gratinada.jpg", 4);';
$resultado = mysqli_query($enlace, $queryProducts);

if (!$resultado) {
    die('Error, insertando productos');
}


//INSERTA LAS ÓRDENES
$queryOrders =  'INSERT INTO orders_products_clients 
(id_client, id_product, quantity, order_date) VALUES
(10, 1000, 1, NOW()), 
(10, 3000, 2, NOW()), 
(20, 2000, 4, NOW()), 
(20, 3000, 2, NOW()), 
(20, 6000, 2, NOW());';
$resultado = mysqli_query($enlace, $queryOrders);

if (!$resultado) {
    die('Error, insertando pedidos');
}


echo('Valores insertados!!');
mysqli_close($enlace);

?>