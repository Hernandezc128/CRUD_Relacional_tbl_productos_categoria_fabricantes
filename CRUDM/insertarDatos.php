<?php

include "../config/conexion.php";

    $nom_fabricante = $_POST['nom_fabricante'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $fech_registro = $_POST['fech_registro'];
    $estado = $_POST['estado'];
    $Comentarios = $_POST['Comentarios'];

$sql = "INSERT INTO fabricante(nom_fabricante, direccion,telefono,email,fech_registro,estado,Comentarios)
    VALUES ('$nom_fabricante','$direccion','$telefono','$email','$fech_registro','$estado','$Comentarios')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
