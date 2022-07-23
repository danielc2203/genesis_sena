<?php  
    require "../recursos/header.php";
    include "../modelo/conexion.php";
    include ("mensaje.php");
    require ("datos.php")
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
                    <h4 class="card-title"> <?= $modulo?> de My Genesis</h4>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fecha</th>
                                <th>Nombres</th>
                                <th>Clase</th>
                                <th>Cantidad</th>
                                <th>Peso en Pie</th>
                                <th>Peso Canal</th>
                                <th>Merma u Rendimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $query = "SELECT * FROM rendimiento";
                                    $query_run = mysqli_query($conexion, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $proveedores)
                                            {
                                                ?>
                                                    <?php
                                                            //$valor= $proveedores['peso_pie']/2-$proveedores['peso_canal'];
                                                            $valor1 = $proveedores['peso_canal'];
                                                            $valor2= $proveedores['peso_pie']/2;
                                                            $valor = $valor1 - $valor2;
                                                    ?>
                                                <tr>
                                                    <td><?= $proveedores['id']; ?></td>
                                                    <td><?= $proveedores['fecha']; ?></td>
                                                    <td><?= $proveedores['nombre']; ?></td>
                                                    <td><?= $proveedores['clase']; ?></td>
                                                    <td><?= $proveedores['cantidad']; ?></td>
                                                    <td><?= $proveedores['peso_pie']; ?></td>
                                                    <td><?= $proveedores['peso_canal']; ?></td>

                                                    <?php if($valor < 1) { ?>
                                                        <td class="table-danger"><?= $valor?></td>
                                                    <?php }else { ?>
                                                        <td class="table-success"><?= $valor?></td>
                                                    <?php } ?>
                                                    

                                                   <!-- <td><?= $proveedores['rendimiento']; ?></td> -->
                                                    <td>
                                                        <a href="ver_registro.php?id=<?= $proveedores['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                                                        <a href="actualizar_registro.php?id=<?= $proveedores['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                        <form action="codigos.php" method="POST" class="d-inline">
                                                        <button type="submit" name="borrar_registro" id="borrar_registro" value="<?=$proveedores['id'];?>" class="btn btn-danger btn-sm">Borrar</button>
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