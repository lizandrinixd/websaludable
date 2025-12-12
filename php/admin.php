<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
        header("Location: ../index.php");
        exit();
    }
}
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <title>Admin - App-titud Nutritiva</title>
  <link rel="stylesheet" href="../css/estilos.css" />
</head>
<body>
  <div class="container">
    <h1>Panel de Administración</h1>

    <h2>Alimentos registrados</h2>
    <?php
    $res = $conexion->query("SELECT * FROM alimentos ORDER BY nombre ASC");
    if ($res->num_rows > 0) {
        echo "<table>
                   <tr>
                      <th>Nombre</th>
                      <th>Calorías</th>
                      <th>Proteínas</th>
                      <th>Carbohidratos</th>
                      <th>Grasas</th>
                      <th>Acciones</th>
                    </tr>";
        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".htmlspecialchars($row['nombre'])."</td>";
            echo "<td>".(int)$row['calorias']."</td>";
            echo "<td>".(float)$row['proteinas']."</td>";
            echo "<td>".(float)$row['carbohidratos']."</td>";
            echo "<td>".(float)$row['grasas']."</td>";
            echo "<td class='actions'>
                    <a href='actualizar_alimentos.php?edit=".$row['id_alimento']."'>Editar</a>
                    <a href='eliminar_alimentos.php?delete=".$row['id_alimento']."' onclick=\"return confirm('Eliminar este alimento?');\">Eliminar</a>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay alimentos.</p>";
    }
    ?>

    <h2>Agregar alimento (rápido)</h2>
    <form action="crear_alimentos.php" method="POST">
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="number" name="calorias" placeholder="Calorías" required>
      <input type="number" step="0.1" name="proteinas" placeholder="Proteínas" required>
      <input type="number" step="0.1" name="carbohidratos" placeholder="Carbohidratos" required>
      <input type="number" step="0.1" name="grasas" placeholder="Grasas" required>
      <button type="submit">Agregar</button>
    </form>

    <p><a href="../index.php">Volver al inicio</a></p>
  </div>
</body>
</html>