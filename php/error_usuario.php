<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Error</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="card">
            <div class="card-body">
                <a href="crear_usuario.php" class="text-decoration-none text-dark">
                <div class="alert alert-danger" role="alert">
                    <?php if (isset($th)) {echo "Error al crear el usuario: " . $th->getMessage();} ?>
                </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>