<?php
require_once 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conexion ->prepare("INSERT INTO usuarios (nombre, email, contrasena, tipo_usuario) VALUES (?, ?, ?, 'usuario')");
    $stmt->bind_param("sss", $nombre, $email, $contrasena);
    try {
        $stmt->execute();
        header("Location: ../index.php");
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = 'usuario';
        exit();
    } catch (\Throwable $th) {
        $stmt->close();
        require_once 'error_usuario.php';
    }
    }
?>
