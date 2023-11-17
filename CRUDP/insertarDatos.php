<?php

include "../config/conexion.php";

$nom_producto = $_POST['nom_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$fech_vencimiento = $_POST['fech_vencimiento'];
$id_categoria = $_POST['id_categoria'];
$id_fabricante = $_POST['id_fabricante'];

$sql = "INSERT INTO productos(nom_producto, descripcion, precio, stock, fech_vencimiento,id_categoria, id_fabricante)
        VALUES ('$nom_producto', '$descripcion', '$precio', '$stock', '$fech_vencimiento', '$id_categoria', '$id_fabricante')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
