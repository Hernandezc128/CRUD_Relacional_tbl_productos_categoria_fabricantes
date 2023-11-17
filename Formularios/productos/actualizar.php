<?php 
include_once("../../config/conexion.php");

$sql = "SELECT * FROM productos WHERE id_prducto =" . $_REQUEST['Id'];
$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">CATEGORIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">MARCAS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR PRODUCTO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">

                            <input type="hidden" class="form-control" name="id_producto" id="id_producto" value="<?php echo $row['id_prducto'] ?>">

                            <!-- TRAER DATOS CATEGORIAS -->
                            <div class="mb-3">
                                <label for="nom_categoria" class="form-label">Categorias</label>
                                <select class="form-select form-select-lg" name="nom_categoria" id="nom_categoria">
                                    <option selected disabled>Seleccione una Categoria</option>
                                    <?php
                                    $sql1 = "SELECT * FROM categoria WHERE id_categoria=" . $row['id_categoria'];
                                    $resultado1 = $conexion->query($sql1);
                                    $row1 = $resultado1->fetch_assoc();

                                    echo "<option selected value='" . $row1['id_categoria'] . "'>" . $row1['nom_categoria'] . "</option>";

                                    $sql2 = "SELECT * FROM categoria";
                                    $resultado2 = $conexion->query($sql2);

                                    while ($fila = $resultado2->fetch_assoc()) {
                                        if ($fila['id_categoria'] != $row1['id_categoria']) {
                                            echo "<option value='" . $fila['id_categoria'] . "'>" . $fila['nom_categoria'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="id_fabricante" class="form-label">Fabricante</label>
                                <select class="form-select form-select-lg" name="id_fabricante" id="id_fabricante">
                                    <option selected disabled>Seleccione una marca</option>
                                    <?php
                                    $sql3 = "SELECT * FROM fabricante WHERE id_fabricante=" . $row['id_fabricante'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row3['id_fabricante'] . "'>" . $row3['nom_fabricante'] . "</option>";

                                    $sql4 = "SELECT * FROM fabricante";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_assoc()) {
                                        if ($fila['id_fabricante'] != $row['id_fabricante']) {
                                            echo "<option value='" . $fila['id_fabricante'] . "'>" . $fila['nom_fabricante'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nom_producto" class="form-label">Nombre de producto</label>
                                <input type="text" class="form-control" id="nom_producto" name="nom_producto" placeholder="Nombre del producto" value="<?php echo $row['nom_producto'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Descripcion"><?php echo $row['descripcion'] ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?php echo $row['precio'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" value="<?php echo $row['stock'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="fech_vencimiento" class="form-label">Fecha de vencimiento</label>
                                <input type="text" class="form-control" id="fech_vencimiento" name="fech_vencimiento" placeholder="Fecha de vencimiento" value="<?php echo $row['fech_vencimiento'] ?>">
                            </div>

                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>
