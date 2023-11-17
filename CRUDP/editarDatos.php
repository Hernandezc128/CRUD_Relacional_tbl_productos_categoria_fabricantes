<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id_producto'];
    $nom_producto = $_POST['nom_producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $fech_vencimiento = $_POST['fech_vencimiento'];
    $id_categoria = $_POST['id_categoria'];
    $id_fabricante = $_POST['id_fabricante'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE productos SET nom_producto = '$nom_producto', descripcion = '$descripcion', precio = '$precio', stock = '$stock', fech_vencimiento = '$fech_vencimiento', id_categoria = '$id_categoria', id_fabricante = '$id_fabricante' WHERE id_prducto = '$id'";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}

?>
