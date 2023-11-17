<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR PRODUCTO</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                            <div class="mb-3">
                            <label for="id_categoria" class="form-label">Categorías</label>
                                <select class="form-select form-select-lg" name="id_categoria" id="id_categoria" required>
                                    <option selected disabled>Seleccione una categoría</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM categoria");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['id_categoria'] . "'>" . $resultado['id_categoria'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                            <label for="id_fabricante" class="form-label">Fabricantes</label>
                                <select class="form-select form-select-lg" name="id_fabricante" id="id_fabricante" required>
                                    <option selected disabled>Seleccione un fabricante</option>
                                    <?php
                                    $sql = $conexion->query("SELECT * FROM fabricante");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['id_fabricante'] . "'>" . $resultado['id_fabricante'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nom_producto" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="nom_producto" name="nom_producto" placeholder="Nombre del producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Descripcion" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required>
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock" required>
                            </div>
                            <div class="mb-3">
                                <label for="fech_vencimiento" class="form-label">Fecha Vencimiento</label>
                                <input type="date" class="form-control" name="fech_vencimiento" id="fech_vencimiento" placeholder="Fecha de Vencimiento" required>
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>