<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];
//usuario y contraseña
  if ($usuario === "admin" && $clave === "1234") {
    $_SESSION['admin'] = true;
    header("Location: listar_turnos.php");
    exit();
  } else {
    $error = "Credenciales incorrectas";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5 col-md-4">
    <h3 class="mb-3 text-center">Acceso Administrativo</h3>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST" action="login.php">
      <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Contraseña</label>
        <input type="password" name="clave" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
  </div>
</body>
</html>
