<?php

$conexion = mysqli_connect("localhost","root","","hse_system");

if (!$conexion) {
die("Error de conexión");
}

$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO incidentes(tipo, descripcion)
VALUES ('$tipo', '$descripcion')";

if(mysqli_query($conexion, $sql)){
echo "Incidente guardado correctamente";
} else {
echo "Error al guardar";
}

?>
