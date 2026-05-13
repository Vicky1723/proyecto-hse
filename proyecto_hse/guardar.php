<?php

$conexion = mysqli_connect("localhost","root","","hse_system");

if (!$conexion) {
die("Error de conexión");
}

$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];
$riesgo = $_POST['riesgo'];

$sql = "INSERT INTO incidentes(tipo, descripcion, riesgo)
VALUES ('$tipo', '$descripcion', '$riesgo')";

if(mysqli_query($conexion, $sql)){
echo "Incidente guardado correctamente";
} else {
echo "Error al guardar";
}

?>
