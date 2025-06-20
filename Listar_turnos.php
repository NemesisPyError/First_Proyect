<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}

$conexion = new mysqli("localhost", "root", "", "turismo");
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT * FROM turnos ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Turnos Registrados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar fija (opcional) -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand">Panel de Administración</span>
      <form class="d-flex" action="logout.php" method="post">
        <button class="btn btn-outline-light" type="submit">Cerrar Sesión</button>
      </form>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Lista de Turnos Registrados</h2>
      <a href="Cita.html" class="btn btn-primary">+ Nuevo Turno</a>
    </div>

    <?php if ($resultado->num_rows > 0): ?>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
          <thead class="table-dark text-center">
            <tr>
              <th>ID</th>
              <th>Nombre y Apellido</th>
              <th>Cédula</th>
              <th>Lugar</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
              <tr>
                <td class="text-center"><?= $fila['id'] ?></td>
                <td><?= htmlspecialchars($fila['nombre_apellido']) ?></td>
                <td><?= $fila['cedula'] ?></td>
                <td><?= htmlspecialchars($fila['lugar']) ?></td>
                <td><?= $fila['fecha'] ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <div class="alert alert-info text-center">No hay turnos registrados aún.</div>
    <?php endif; ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conexion->close();
?>
