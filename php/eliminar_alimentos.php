<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }   
// if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
//     header("Location: ../index.php");
//     exit();
// }
include("conexion.php");
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $conexion->prepare("DELETE FROM alimentos WHERE id_alimento = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Error al eliminar: " . $stmt->error;
    }
    $stmt->close();
}
?>