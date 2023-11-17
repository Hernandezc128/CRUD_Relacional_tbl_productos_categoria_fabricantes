<?php

include "../config/conexion.php";

$nom_categoria = $_POST['nom_categoria'];
$descripcion = $_POST['descripcion'];
$fech_creacion = $_POST['fech_creacion'];
$num_producto = $_POST['num_producto'];
$prom_costos = $_POST['prom_costos'];
$img_producto = $_POST['img_producto'];
$nom_fabricante = $_POST['nom_fabricante'];


$sql = "INSERT INTO categoria( nom_categoria, descripcion, fech_creacion, num_producto, prom_costos, img_producto, nom_fabricante ) values ('$nom_categoria','$descripcion','$fech_creacion','$num_producto','$prom_costos','$img_producto','$nom_fabricante')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
