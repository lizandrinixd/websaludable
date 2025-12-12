<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
        header("Location: ../index.php");
        exit();
    }
}

include("conexion.php");

$result = $conexion->query("SELECT * FROM alimentos ORDER BY nombre ASC");
if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-hover'
              <tr>
                  <th>Nombre</th>
                  <th>Calorías</th>
                  <th>Proteínas</th>
                  <th>Carbohidratos</th>
                  <th>Grasas</th>
              </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".htmlspecialchars($row['nombre'])."</td>";
        echo "<td>".(int)$row['calorias']."</td>";
        echo "<td>".(float)$row['proteinas']."</td>";
        echo "<td>".(float)$row['carbohidratos']."</td>";
        echo "<td>".(float)$row['grasas']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay alimentos registrados.</p>";
}
?>