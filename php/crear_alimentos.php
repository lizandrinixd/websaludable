<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $calorias = (int)$_POST['calorias'];
    $proteinas = (float)$_POST['proteinas'];
    $carbohidratos = (float)$_POST['carbohidratos'];
    $grasas = (float)$_POST['grasas'];

    $stmt = $conexion->prepare("INSERT INTO alimentos (nombre, calorias, proteinas, carbohidratos, grasas) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdddd", $nombre, $calorias, $proteinas, $carbohidratos, $grasas);

    if ($stmt->execute()) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Error al insertar: " . $stmt->error;
    }
    $stmt->close();
}
?>