<?php
include 'conexion.php';

// Supongamos que los valores de idUsuario, usuUsuario, pssUsuario y cargoUsuario se están enviando a través de un formulario POST
$idUsuario = $_POST['idUsuario'];
$usuUsuario = $_POST['usuUsuario'];
$pssUsuario = $_POST['pssUsuario'];
$cargoUsuario = $_POST['cargoUsuario'];

// Modifica tu consulta para incluir los nuevos atributos
$consulta = "INSERT INTO usuario VALUES ('$idUsuario', '$usuUsuario', '$pssUsuario', '$cargoUsuario')";
  // Imprimir los resultados como JSON

mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
mysqli_close($conexion);
?>
