<?php
session_start();
if (isset($_SESSION['usuario']) ) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario - App-titud Nutritiva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center shadow p-4 rounded mt-5 bg-white shadow-lg">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Crear Nuevo Usuario</h2>
                <form action="procesar_usuario.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>  
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Crear Usuario</button>
                    </div>
                    <div class="d-grid">
                        <a href="../index.php" class="btn btn-secondary mt-2">Volver al Inicio</a>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
