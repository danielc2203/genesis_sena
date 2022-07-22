<?php  
    require "../recursos/header.php";
    include "../modelo/conexion.php";
    include ("mensaje.php");
?>

<!-- Proveedores -->

<link rel="stylesheet" href="CSS/menud.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/17621849bc.js" crossorigin="anonymous"></script>

<br><br><br>


    <div class="container mt-5">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Detalles del Proveedor My Genesis
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
                        
                            <div class="mb-3">
                                <label>Nombre de Proveedor</label>
                                <p class="form-control">
                                    <?=$proveedores['nombres'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>proveedores Email</label>
                                <p class="form-control">
                                    <?=$proveedores['correo'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>proveedores Phone</label>
                                <p class="form-control">
                                    <?=$proveedores['telefono'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>proveedores Ubicacion</label>
                                <p class="form-control">
                                    <?=$proveedores['ubicacion'];?>
                                </p>
                            </div>

                        <?php
                    }
                    else
                    {
                        echo "<h4>El ID no fue encontrado</h4>";
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