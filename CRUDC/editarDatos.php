<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_categoria = $_POST['nom_categoria'];
    $descripcion = $_POST['descripcion'];
    $fech_creacion = $_POST['fech_creacion'];
    $num_producto = $_POST['num_producto'];
    $prom_costos = $_POST['prom_costos'];
    $img_producto = $_POST['img_producto'];
    $nom_fabricante = $_POST['nom_fabricante'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE categoria SET nom_categoria = '$nom_categoria', descripcion = '$descripcion', fech_creacion = '$fech_creacion', num_producto = '$num_producto', prom_costos = '$prom_costos', img_producto = '$img_producto', nom_fabricante = '$nom_fabricante' WHERE id_categoria = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
