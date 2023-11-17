<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_fabricante = $_POST['nom_fabricante'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $fech_registro = $_POST['fech_registro'];
    $estado = $_POST['estado'];
    $Comentarios = $_POST['Comentarios'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE fabricante SET nom_fabricante = '$nom_fabricante',direccion = '$direccion',telefono = '$telefono',email = '$email',fech_registro = '$fech_registro',estado = '$estado',Comentarios = '$Comentarios'  WHERE id_fabricante = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
