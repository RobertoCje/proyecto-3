<?php
// Incluimos el archivo que acabas de crear
include("db.php");

// Si el código llega aquí sin morir (die), es que la conexión es exitosa
if ($conexion) {
    echo "<h1 style='color: green; text-align: center;'>¡Conexión Exitosa al Instituto Gutenberg!</h1>";
    echo "<p style='text-align: center;'>PHP y MySQL están hablando perfectamente.</p>";
}
?>