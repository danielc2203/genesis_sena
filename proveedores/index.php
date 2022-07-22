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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Proveedores de Genesis</h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>nombres</th>
                                <th>telèfono</th>
                                <th>Correo</th>
                                <th>Ubicación</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $query = "SELECT * FROM proveedores";
                                    $query_run = mysqli_query($conexion, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $proveedores)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $proveedores['id']; ?></td>
                                                    <td><?= $proveedores['nombres']; ?></td>
                                                    <td><?= $proveedores['telefono']; ?></td>
                                                    <td><?= $proveedores['correo']; ?></td>
                                                    <td><?= $proveedores['ubicacion']; ?></td>
                                                    <td>
                                                        <a href="proveedores-ver.php?id=<?= $proveedores['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                                                        <a href="proveedores-editar.php?id=<?= $proveedores['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                        <form action="codigos.php" method="POST" class="d-inline">
                                                        <button type="submit" name="borrar_proveedores" id="borrar_registro" value="<?=$proveedores['id'];?>" class="btn btn-danger btn-sm">Borrar</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "<h5> No Record Found </h5>";
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