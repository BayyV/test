<?php
include 'conexion.php';

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$idLeche = $_POST['idLeche'];
$cantidadLeche = $_POST['cantidadLeche'];

$idYogurt = $_POST['idYogurt'];
$cantidadYogurt = $_POST['cantidadYogurt'];

$idQueso = $_POST['idQueso'];
$cantidadQueso = $_POST['cantidadQueso'];

$idManjar = $_POST['idManjar'];
$cantidadManjar = $_POST['cantidadManjar'];

$idMantequilla = $_POST['idMantequilla'];
$cantidadMantequilla = $_POST['cantidadMantequilla'];

// Actualizar la tabla de productos (solo un ejemplo, ajusta según tu estructura de base de datos)
$sql_leche = "UPDATE productos SET proStock = GREATEST(proStock - $cantidadLeche, 0) WHERE idProducto = $idLeche";
$conexion->query($sql_leche);

$sql_yogurt = "UPDATE productos SET proStock = GREATEST(proStock - $cantidadYogurt, 0) WHERE idProducto = $idYogurt";
$conexion->query($sql_yogurt);

$sql_queso = "UPDATE productos SET proStock = GREATEST(proStock - $cantidadQueso, 0) WHERE idProducto = $idQueso";
$conexion->query($sql_queso);

$sql_manjar = "UPDATE productos SET proStock = GREATEST(proStock - $cantidadManjar, 0) WHERE idProducto = $idManjar";
$conexion->query($sql_manjar);

$sql_mantequilla = "UPDATE productos SET proStock = GREATEST(proStock - $cantidadMantequilla, 0) WHERE idProducto = $idMantequilla";
$conexion->query($sql_mantequilla);

// Cerrar la conexión
$conexion->close();

echo "Venta realizada correctamente";
?>
