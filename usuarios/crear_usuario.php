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
                    <h4>Nuevo Usuario Genesis
                        <a href="index.php" class="btn btn-danger float-end">Volver</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="codigos.php" method="POST">
                            <div class="container text-center">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" name="nombres" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <label>Usuario</label>
                                        <input type="text" name="usuario" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" class="form-control">
                                    </div>         
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Correo</label>
                                        <input type="email" name="correo" class="form-control">
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Contraseña</label>
                                        <input type="password" name="clave" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Verificar Contraseña</label>
                                        <input type="password" name="clave" class="form-control">
                                    </div>
                                </div>                

                            </div>

                        <br>

                        <div class="mb-3">
                            <button type="submit" name="nuevo_usuario" class="btn btn-primary">Registrar Usuario</button>
                        </div>

                    
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
    </div>

<br><br><br>

<?php include "../recursos/footer.php"?>