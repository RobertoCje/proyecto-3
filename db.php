<?php
// Configuración de la conexión a la base de datos
$host = "localhost";    // El servidor es tu propia computadora
$user = "root";         // Usuario por defecto de XAMPP
$pass = "";             // XAMPP no tiene contraseña por defecto
$db   = "instituto_gutenberg"; // El nombre que le pusimos en phpMyAdmin

// Creamos la conexión usando la librería mysqli
$conexion = mysqli_connect($host, $user, $pass, $db);

// Verificamos si la conexión fue exitosa
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Configuramos los caracteres para que acepten tildes y la letra ñ
mysqli_set_charset($conexion, "utf8");

// Si llegamos aquí, la conexión es exitosa
?>