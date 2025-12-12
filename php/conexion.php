<?php
// conexion.php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "123456"; // si configuraste contraseña en MySQL, ponla aquí
$DB_NAME = "appnutritiva";

$conexion = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
$conexion->set_charset("utf8");
?>