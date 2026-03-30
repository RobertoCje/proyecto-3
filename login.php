<?php
// 1. Conexión rápida
$conexion = mysqli_connect("localhost", "root", "", "instituto_gutenberg");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// 2. Procesar datos si vienen del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE matricula = '$u' AND password = '$p'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        echo "<h1>¡Acceso Exitoso!</h1>";
        echo "Bienvenido: " . $usuario['nombre_completo'];
    } else {
        echo "<h1>Error</h1>";
        echo "Usuario o contraseña incorrectos.";
    }
} else {
    echo "No se recibieron datos por POST.";
}
?>