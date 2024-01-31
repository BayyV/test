<?php
include 'conexion.php';
$usuUsuario=$_POST['usuario'];
$pssUsuario=$_POST['password'];

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE usuUsuario=? AND pssUsuario=?");
$sentencia->bind_param('ss', $usuUsuario, $pssUsuario);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
    echo json_encode($fila, JSON_UNESCAPED_UNICODE);
}
//test
$sentencia->close();
$conexion->close();
?>
