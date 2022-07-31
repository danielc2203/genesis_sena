<?php  
    require "../recursos/header.php";
    include "../modelo/conexion.php";
    include ("mensaje.php");
?>

<!-- Proveedores -->

<!-- <link rel="stylesheet" href="CSS/menud.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/17621849bc.js" crossorigin="anonymous"></script>

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">Usuarios de My Genesis</h4>
                    
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="crear_usuario.php" class="btn btn-primary">Nuevo Usuario</a>
                </div>
                    
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Ultima Conexión</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $query = "SELECT * FROM usuarios";
                                    $query_run = mysqli_query($conexion, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $registro)
                                            {
                                                $estado = $registro['estado'];
                                                ?>
                                                <tr>
                                                    <td><?= $registro['nombres']; ?></td>
                                                    <td><?= $registro['apellidos']; ?></td>
                                                    <td><?= $registro['usuario']; ?></td>
                                                    <td><?= $registro['correo']; ?></td>
                                                    <td><?= $registro['telefono']; ?></td>
                                                    <td><?= $registro['ult_visita']; ?></td>
                                                    <td>
                                                        <a href="editar_usuario.php?id_usr=<?= $registro['id_usr']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                        <form action="codigos.php" method="POST" class="d-inline">
                                                        <button type="submit" name="desactivar_usr" value="<?= $registro['id_usr'] ?>"  class="btn btn-danger btn-sm" <?php if ($estado == '1'){ ?> style="display: none;" <?php   } ?> >Desactivar</button>
                                                        <button type="submit" name="activar_usr"  value="<?= $registro['id_usr'] ?>"  class="btn btn-warning btn-sm" <?php if ($estado == '0'){ ?> style="display: none;" <?php   } ?> >Activar</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "<h5> No se encontraron registros </h5>";
                                        }
                                    ?>
                        </tbody>
                    </table>
                   </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
                                                         
        
<br><br><br>

<?php include "../recursos/footer.php"?>