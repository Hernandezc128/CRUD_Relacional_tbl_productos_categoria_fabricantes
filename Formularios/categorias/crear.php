<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

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
                        <h5 class="card-title text-center">REGISTRAR CATEGORIAS</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nom_categoria" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nom_categoria" name="nom_categoria" placeholder="Nombre de la categoria" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Estado categoria" required>
                            </div>
                            <div class="mb-3">
                                <label for="fech_creacion" class="form-label">Fecha de creacion</label>
                                <input type="date" class="form-control" id="fech_creacion" name="fech_creacion" placeholder="Nombre de la categoria" required>
                            </div>
                            <div class="mb-3">
                                <label for="num_producto" class="form-label">Num. Productos</label>
                                <input type="number" class="form-control" id="num_producto" name="num_producto" placeholder="Estado categoria" required>
                            </div>
                            <div class="mb-3">
                                <label for="prom_costos" class="form-label">Prom. Costos</label>
                                <input type="text" class="form-control" id="prom_costos" name="prom_costos" placeholder="Nombre de la categoria" required>
                            </div>
                            <div class="mb-3">
                                <label for="img_producto" class="form-label">img del producto</label>
                                <input type="text" class="form-control" id="img_producto" name="img_producto" placeholder="Estado categoria" required>
                            </div>
                            <div class="mb-3">
                                <label for="nom_fabricante" class="form-label">Nombre del fabricante</label>
                                <input type="text" class="form-control" id="nom_fabricante" name="nom_fabricante" placeholder="Estado categoria" required>
                            </div>
                        
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/categorias/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>