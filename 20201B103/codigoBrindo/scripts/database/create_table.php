
<?php
$enlace = mysqli_connect("localhost", "20201B103", "8FcDd67_Dg", "20201B103");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//SE CREA LA BASE DE DATOS, HAY QUE EJECUTARLO UNA VEZ
$resultado = mysqli_query($enlace, 'CREATE TABLE categories(
    id_category INT(3) NOT NULL AUTO_INCREMENT,
    category CHARACTER varying(40) NOT NULL,
    description CHARACTER varying(200),
    photo CHARACTER varying(200) NOT NULL,
    CONSTRAINT id_categories_pk PRIMARY KEY (id_category)
  );');
if (!$resultado) {
    die('Error, conectando o los valores ya existen');
}

$resultado = mysqli_query($enlace, 'CREATE TABLE clients(
    id_client INT(11) NOT NULL AUTO_INCREMENT,
    first_name CHARACTER varying(40) NOT NULL,
    last_name CHARACTER varying(40) NOT NULL,
    CC INT(11) UNSIGNED  NOT NULL UNIQUE,
    email CHARACTER varying(40) NOT NULL,
    password CHARACTER varying(255) NOT NULL,
    phone CHARACTER varying(20) NOT NULL UNIQUE,
    age INT(2),
    photo CHARACTER varying(200),
    id_address INT(11),
    CONSTRAINT id_clients_pk PRIMARY KEY (id_client)
  );');

if (!$resultado) {
    die('Error, conectando la BD');
}

$resultado = mysqli_query($enlace, 'CREATE TABLE employees(
    id_employee INT(11) NOT NULL AUTO_INCREMENT,
    first_name CHARACTER varying(40) NOT NULL,
    last_name CHARACTER varying(40) NOT NULL,
    CC INT(11) UNSIGNED  NOT NULL UNIQUE,
    password CHARACTER varying(255) NOT NULL,
    phone CHARACTER varying(20) NOT NULL UNIQUE,
    age INT(2),
    photo CHARACTER varying(200),
    id_address INT(11),
    CONSTRAINT id_employees_pk PRIMARY KEY (id_employee)
  );');
if (!$resultado) {
    die('Error, conectando la BD');
}

$resultado = mysqli_query($enlace, 'CREATE TABLE products(
    id_product INT(11) NOT NULL AUTO_INCREMENT,
    name CHARACTER varying(40) NOT NULL,
    description CHARACTER varying(200),
    price INT UNSIGNED NOT NULL,
    score DOUBLE UNSIGNED,
    votters DOUBLE UNSIGNED,
    photo CHARACTER varying(200) NOT NULL,
    id_category INT(11),
    CONSTRAINT id_products_pk PRIMARY KEY (id_product),
    CONSTRAINT id_categories_products_fk
    FOREIGN  KEY (id_category) REFERENCES categories(id_category)
  );');
if (!$resultado) {
    die('Error, conectando la BD');
}

///////alejandro modifico esto

$resultado = mysqli_query($enlace, 'CREATE TABLE encuesta(
  id_encuesta INT(11) NOT NULL AUTO_INCREMENT,
  name CHARACTER varying(40) NOT NULL,
  gender CHARACTER varying(40) NOT NULL,
  email CHARACTER varying(40) NOT NULL,
  phone  CHARACTER varying(20) NOT NULL UNIQUE,
  learning  CHARACTER varying(40) NOT NULL,
  tipo_uso CHARACTER varying(40) NOT NULL,
  pages CHARACTER varying(40) NOT NULL,
  hours int(12),
  menssage CHARACTER varying(100) NOT NULL,
  CONSTRAINT id_encuesta_pk PRIMARY KEY (id_encuesta)
  );');
if (!$resultado) {
    die('Error, conectando la BD');
}
///////////////////////////////

$resultado = mysqli_query($enlace, 'CREATE TABLE orders_products_clients(
    id_client INT(11),
    id_product INT(11),
    quantity INT,
    order_date DATETIME,
    CONSTRAINT id_orders_pk PRIMARY KEY (id_client, id_product)
  );');
if (!$resultado) {
    die('Error, conectando la BD');
}

echo('Tablas creadas!!');
mysqli_close($enlace);

?>
