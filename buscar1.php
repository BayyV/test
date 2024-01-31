<?php
include 'conexion.php';

// Verificar si se recibe un ID de usuario válido
if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];

    // Modifica tu consulta para buscar un usuario por idUsuario
    $consulta = "SELECT * FROM usuario WHERE idUsuario = '$idUsuario'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        // Verificar si se encontraron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Procesar los resultados
            $usuarioEncontrado = mysqli_fetch_assoc($resultado);
            // Imprimir los resultados como JSON

            // Imprimir los resultados como JSON
            echo json_encode(array("exito" => 1, "datos" => $usuarioEncontrado));
        } else {
            echo json_encode(array("exito" => 0, "mensaje" => "No se encontró el usuario con ID: $idUsuario"));
        }
    } else {
        // Manejar errores, por ejemplo, imprimir el mensaje de error
        echo json_encode(array("error" => "Error en la consulta: " . mysqli_error($conexion)));
    }
} else {
    echo json_encode(array("error" => "ID de usuario no proporcionado"));
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
