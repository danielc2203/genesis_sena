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

    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Nuevo Registro
                        <a href="index.php" class="btn btn-danger float-end">Volver</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="codigos.php" method="POST">

                        <div class="mb-3">
                            <label>Fecha</label>
                            <input type="date" name="fecha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nombres</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Clase</label>
                            <input type="text" name="clase" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Cantidad</label>
                            <input type="text" name="cantidad" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Peso en Pie</label>
                            <input type="text" name="peso_pie" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Peso en Canal</label>
                            <input type="text" name="peso_canal" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_rendimiento" class="btn btn-primary">Enviar Registro</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

<br><br><br>

<?php include "../recursos/footer.php"?>