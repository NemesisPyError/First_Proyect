<?php
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
  <div class="container mt-5">
    <h2 class="mb-4">Lista de Turnos Registrados</h2>
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
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
            <td><?= $fila['id'] ?></td>
            <td><?= htmlspecialchars($fila['nombre_apellido']) ?></td>
            <td><?= $fila['cedula'] ?></td>
            <td><?= htmlspecialchars($fila['lugar']) ?></td>
            <td><?= $fila['fecha'] ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <a href="Cita.html" class="btn btn-primary">Volver al formulario</a>
  </div>
</body>
</html>

<?php
$conexion->close();
?>
