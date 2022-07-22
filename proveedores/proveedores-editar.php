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
                        <h4>Editar Proveedores de My Genesis
                            <a href="index.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $proveedores_id = mysqli_real_escape_string($conexion, $_GET['id']);
                            $query = "SELECT * FROM proveedores WHERE id='$proveedores_id' ";
                            $query_run = mysqli_query($conexion, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $proveedores = mysqli_fetch_array($query_run);
                                ?>
                                <form action="codigos.php" method="POST">
                                    <input type="hidden" name="proveedores_id" value="<?= $proveedores['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nombre de Proveedores</label>
                                        <input type="text" name="nombres" value="<?=$proveedores['nombres'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo del Proveedores</label>
                                        <input type="email" name="correo" value="<?=$proveedores['correo'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefono del Proveedores</label>
                                        <input type="text" name="telefono" value="<?=$proveedores['telefono'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Ubicaciòn del Proveedores</label>
                                        <input type="text" name="ubicacion" value="<?=$proveedores['ubicacion'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_proveedores" class="btn btn-primary">
                                            Actualizar proveedores
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
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