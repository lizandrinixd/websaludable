<!-- un logout con una imagen divertida con una frase graciosa este se incrustrara-->
<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Logout - App-titud Nutritiva</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body>
  <div class="container text-center mt-5">
    <h1>Has cerrado sesión</h1>
    <p>¡Hasta luego! Esperamos verte pronto de nuevo.</p>
    <img src="../img/logout-migra.gif" alt="Goodbye" class="img-fluid rounded" />
    <div class="mt-4">
      <a href="../index.php" class="btn btn-primary">Volver al inicio</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>