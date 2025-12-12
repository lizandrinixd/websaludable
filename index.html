<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>App-titud Nutritiva</title>
  
  <!-- bootstrap -->
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  
</head>
<body>
  <div class="container">


<!-- preguntar si session es start -->
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
      echo '<nav class="navbar bg-info bg-body-secondary text-light rounded mb-4 mt-3">';
      echo '  <div class="container-fluid">';
      echo '  <div class="d-flex align-items-center mb-0">';
      echo '     <p class="fs-4 fw-light mb-0 me-2">';
      echo '        App-titud Nutritiva';
      echo '      </p>';
      echo '      <img src="img/comida.svg" alt="" width="70" height="70" class="d-inline-block align-text-top">';
      echo '    </div>';
      echo "    <p>Bienvenido, " . htmlspecialchars($_SESSION['usuario']) . " | <a href='php/logout.php'>Cerrar sesión</a></p>";
      echo '  </div>';
      echo '</nav>';
    } else {
        header("Location: php/login.php");
        exit(); // detener la ejecución si no está logueado
    }
    ?>

   <section class="text-center">
      <h2>Lista de alimentos</h2>
      <div class="table-responsive shadow-lg m-4" id="lista">
        <?php include("./php/leer_alimentos.php"); ?>
      </div>
    </section>

<?php
    if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'){
      echo '<div class="shadow-lg p-4 mb-4 bg-body rounded">';
      echo '<p>Panel de administración: <a href="php/admin.php">Abrir</a></p>';
      echo '</div>';
    }else{
      echo 'tipo de sesión : ' . $_SESSION['rol'];
      echo '<div class="shadow-lg p-4 mb-4 bg-body rounded">';
      echo '<p>Para acceder al panel de administración, inicia sesión como "admin".</p>';
      echo '</div>';
    }
    ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>