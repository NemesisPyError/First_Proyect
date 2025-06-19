<?php
$conexion = new mysqli("localhost", "root", "", "turismo");

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$lugar = $_POST['option'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO turnos (nombre_apellido, cedula, lugar, fecha) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("siss", $nombre, $cedula, $lugar, $fecha);

if ($stmt->execute()) {
  header("Location: confirmacion.php");
  exit();
} else {
  echo "Error al guardar: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>
