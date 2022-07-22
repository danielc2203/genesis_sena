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
                    <h4>Nuevo Proveedor
                        <a href="index.php" class="btn btn-danger float-end">Volver</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="codigos.php" method="POST">

                        <div class="mb-3">
                            <label>Nombres de Proveedor</label>
                            <input type="text" name="nombres" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Telefono</label>
                            <input type="text" name="telefono" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Correo del Proveedor</label>
                            <input type="email" name="correo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Ubicaciòn</label>
                            <input type="text" name="ubicacion" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_proveedor" class="btn btn-primary">Guardar Proveedor</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

<br><br><br>

<?php include "../recursos/footer.php"?>