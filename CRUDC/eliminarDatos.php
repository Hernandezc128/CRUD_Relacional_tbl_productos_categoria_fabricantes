<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para eliminar el registro de la base de datos (debes proporcionar tus propias consultas)
    $consulta = "DELETE FROM categoria WHERE id_categoria = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la eliminación exitosa
        header("Location: ../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la eliminación falla
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    // Redireccionar a alguna página si el ID no está definido o la solicitud no es GET
    header("Location: ../Formularios/categorias/index.php");
    exit();
}
