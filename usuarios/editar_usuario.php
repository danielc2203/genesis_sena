<?php  
    require "../recursos/header.php";
    include "../modelo/conexion.php";
    include ("mensaje.php");
?>

<!-- proveedores -->

<link rel="stylesheet" href="../CSS/menud.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/17621849bc.js" crossorigin="anonymous"></script>


<div class="container mt-5">

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Usuarios de My Genesis
                            <a href="index.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id_usr']))
                        {
                            $registro_id = mysqli_real_escape_string($conexion, $_GET['id_usr']);
                            $query = "SELECT * FROM usuarios WHERE id_usr='$registro_id' ";
                            $query_run = mysqli_query($conexion, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $registro = mysqli_fetch_array($query_run);
                                ?>
                                <form action="codigos.php" method="POST">
                                    <input type="hidden" name="usuario_id" value="<?= $registro['id_usr']; ?>">

                                    <div class="mb-3">
                                        <label>Nombres</label>
                                        <input type="text" name="nombres" value="<?=$registro['nombres'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" value="<?=$registro['apellidos'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Usuario</label>
                                        <input type="text" name="usuario" value="<?=$registro['usuario'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo Electronico</label>
                                        <input type="email" name="correo" value="<?=$registro['correo'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" value="<?=$registro['telefono'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="editar_usuario" class="btn btn-primary">
                                            Actualizar Usuario
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4> Usuario No Encontrado </h4>";
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