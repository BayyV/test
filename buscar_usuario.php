<?php
include 'conexion.php';

// Obtener datos de la base de datos
$consulta = "SELECT idUsuario, usuUsuario, pssUsuario, cargoUsuario FROM usuario";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $usuariosEncontrados = array();

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $usuariosEncontrados[] = $fila;
    }

    // Verificar si se encontraron resultados
    if (count($usuariosEncontrados) > 0) {
        // Imprimir los resultados como JSON
        echo json_encode(array("exito" => 1, "datos" => $usuariosEncontrados));
    } else {
        echo json_encode(array("exito" => 0, "mensaje" => "No se encontraron usuarios."));
    }
} else {
    // Manejar errores, por ejemplo, imprimir el mensaje de error
    echo json_encode(array("error" => "Error en la consulta: " . mysqli_error($conexion)));
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>


