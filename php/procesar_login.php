<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

   // conecta a ala base de datos conla consulta de select con where usuario y contraseña
   //ya existe la conexion en conexion.php
  session_start();

  include("conexion.php");

  $conexion->set_charset("utf8");
  // tengo que hashear la contraseña antes de compararla
  // tengo esto al guardar  $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

  //$contrasena = password_hash($contrasena, PASSWORD_BCRYPT);
  echo $contrasena;
  $sql = "SELECT * FROM usuarios WHERE email = ? AND contrasena = ?";
  $stmt = $conexion->prepare($sql);
  $stmt->bind_param("ss", $usuario, $contrasena);
  $stmt->execute();
  $resultado = $stmt->get_result();
  if ($resultado->num_rows === 0) {
      // Credenciales inválidas
      echo "Usuario o contraseña incorrectos.";
      exit();
  }

  // Aquí puedes agregar la lógica para verificar las credenciales del usuario
  // Si las credenciales son válidas, puedes iniciar la sesión
  // oks pues la basa de datos 
  $_SESSION['usuario'] = $usuario;
  $row = $resultado->fetch_assoc();
  $_SESSION['rol'] = $row['tipo_usuario']; // Asumiendo que hay una columna 'rol' en la tabla 'usuarios'
  header("Location: ../index.php");
  exit();
}

?>