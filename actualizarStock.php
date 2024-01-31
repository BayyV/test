<?php
include 'conexion.php';

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
 // Imprimir los resultados como JSON

// Obtener los datos del formulario POST
$idProducto = $_POST['idProducto'];
$cantidad = $_POST['cantidad'];

// Consulta SQL para aumentar el stock
$sql_aumentar_stock = "UPDATE productos SET proStock = proStock + $cantidad WHERE idProducto = $idProducto";

// Ejecutar la consulta
if ($conexion->query($sql_aumentar_stock) === TRUE) {
    echo "Stock aumentado correctamente.";
} else {
    echo "Error al aumentar el stock: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
