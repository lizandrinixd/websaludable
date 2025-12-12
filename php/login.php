<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['usuario'])) {
    // header("Location: ./index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="container">
      <!-- login form con diseño de Bootstrap centrado utilizando card -->
      <div class="row justify-content-center shadow p-4 rounded mt-5 bg-white shadow-lg">
        <div class="col-md-6">
          <div class="text-center mb-4">
            <h1>App-titud Nutritiva</h1>
            <p>Por favor, inicia sesión para continuar</p>
          </div>
          <img src="https://www.lafallera.es/wp-content/uploads/2025/02/comida-sana.jpg" alt="" class="img-fluid rounded" >
        </div>
        <div class="col-md-6 ">
          <div class="card mt-5">
            <div class="card-header text-center bg-info bg-gradient">
              <h2>Iniciar sesión</h2>
            </div>
            <div class="card-body">
              <form action="procesar_login.php" method="POST">
                <div class="mb-3">
                  <label for="usuario" class="form-label">Usuario</label>
                  <i class="bi bi-person-badge"></i>
                  <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                  <label for="contrasena" class="form-label">Contraseña</label>
                  <i class="bi bi-key"></i>
                  <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
                <div class="text-center">
                  <p>¿No tienes una cuenta? <a href="crear_usuario.php">Crea una aquí</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
  </div>
</body>
</html>
