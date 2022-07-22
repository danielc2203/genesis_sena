<?php  
    require "../recursos/header.php";
    include "../modelo/conexion.php";
    include ("mensaje.php");
?>

<!-- proveedores -->

<link rel="stylesheet" href="CSS/menud.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/17621849bc.js" crossorigin="anonymous"></script>


<div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Rendimiento de My Genesis
                            <a href="index.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $proveedores_id = mysqli_real_escape_string($conexion, $_GET['id']);
                            $query = "SELECT * FROM rendimiento WHERE id='$proveedores_id' ";
                            $query_run = mysqli_query($conexion, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $proveedores = mysqli_fetch_array($query_run);
                                ?>
                                <form action="codigos.php" method="POST">
                                    <input type="hidden" name="proveedores_id" value="<?= $proveedores['id']; ?>">

                                    <div class="mb-3">
                                        <label>Fecha</label>
                                        <input type="date" name="fecha" value="<?=$proveedores['fecha'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" value="<?=$proveedores['nombre'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Clase</label>
                                        <input type="text" name="clase" value="<?=$proveedores['clase'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Cantidad</label>
                                        <input type="text" name="cantidad" value="<?=$proveedores['cantidad'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Peso en Pies</label>
                                        <input type="text" name="peso_pie" value="<?=$proveedores['peso_pie'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Peso Canal</label>
                                        <input type="text" name="peso_canal" value="<?=$proveedores['peso_canal'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update_registro" class="btn btn-primary">
                                            Actualizar Registro
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No se encontro el ID</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

<?php include "../recursos/footer.php"?>