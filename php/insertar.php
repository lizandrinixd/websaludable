    <?php
      session_start();
      if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
          header("Location: ../index.php");
          exit();
      }
    ?>
    
    
    <div class="container">
      <h2>Registrar alimento</h2>
      <form class="form" action="php/crear_alimentos.php" method="POST">
        <input class="form-control" type="text" name="nombre" placeholder="Nombre del alimento" required>
        <input class="form-control" type="number" name="calorias" placeholder="Calorías" required>
        <input class="form-control" type="number" step="0.1" name="proteinas" placeholder="Proteínas (g)" required>
        <input class="form-control" type="number" step="0.1" name="carbohidratos" placeholder="Carbohidratos (g)" required>
        <input class="form-control" type="number" step="0.1" name="grasas" placeholder="Grasas (g)" required>
        <button type="submit" class="btn btn-outline-primary">Guardar alimento</button>
      </form>
    </section>