<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
        header("Location: ../index.php");
        exit();
    }
}else {
    header("Location: ../index.php");
    exit();
}


include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    $nombre = $_POST['nombre'];
    $calorias = (int)$_POST['calorias'];
    $proteinas = (float)$_POST['proteinas'];
    $carbohidratos = (float)$_POST['carbohidratos'];
    $grasas = (float)$_POST['grasas'];

    $stmt = $conexion->prepare("UPDATE alimentos SET nombre=?, calorias=?, proteinas=?, carbohidratos=?, grasas=? WHERE id_alimento=?");
    $stmt->bind_param("sddddi", $nombre, $calorias, $proteinas, $carbohidratos, $grasas, $id);

    if ($stmt->execute()) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Error al actualizar: " . $stmt->error;
    }
    $stmt->close();
}

// Si te llegan GET para mostrar formulario:
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit'])) {
    $id = (int)$_GET['edit'];
    $res = $conexion->query("SELECT * FROM alimentos WHERE id_alimento=$id");
    $fila = $res->fetch_assoc();
    if ($fila) {
        // Mostrar formulario de edición
        ?>
        <h2>Editar alimento</h2>
        <form action="actualizar_alimentos.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $fila['id_alimento']; ?>">
          <input type="text" name="nombre" value="<?php echo htmlspecialchars($fila['nombre']); ?>" required>
          <input type="number" name="calorias" value="<?php echo (int)$fila['calorias']; ?>" required>
          <input type="number" step="0.1" name="proteinas" value="<?php echo (float)$fila['proteinas']; ?>" required>
          <input type="number" step="0.1" name="carbohidratos" value="<?php echo (float)$fila['carbohidratos']; ?>" required>
          <input type="number" step="0.1" name="grasas" value="<?php echo (float)$fila['grasas']; ?>" required>
          <button type="submit">Guardar cambios</button>
        </form>
        <p><a href="admin.php">Volver al panel</a></p>
        <?php
    } else {
        echo "Alimento no encontrado.";
    }
}
?>