<?php  
    require "../recursos/header.php";
    include "../modelo/conexion.php";
    include ("mensaje.php");
?>

<!-- Proveedores -->

<link rel="stylesheet" href="../CSS/menud.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/17621849bc.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


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
                                                    <td class="id_actual"><?= $proveedores['id']; ?></td>
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

                                                        
                                                        <button name="ver_modal" id="ver_modal" class="btn btn-warning btn-sm ver_modal" > <i class="fa fa-eye"></i></button>
                                                        

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "<h5> No hay registros guardados en la BD </h5>";
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


<!-- Modal -->
<div class="modal fade" id="modal_ver_dato" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Titulo de la vista</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Formulario en Modal -->
        <div class="card text-center">
            <div class="ver_proveedor"></div> 
        </div>
        <!-- Fin del Formulario en Modal -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin del Modal -->

<script>
    $(document).ready(function () {
        $('.ver_modal').click(function (e) { 
            e.preventDefault();

            var proveedor_id = $(this).closest('tr').find('.id_actual').text();
            //console.log(proveedor_id);
            //alert('ok Daniel');
            $.ajax({
                type: "POST",
                url: "codigos.php",
                data: {
                    'check_ver_modal': true,
                    'proveedor_id_actual': proveedor_id,
                },
                
                success: function (response) {
                    //console.log(response);
                    $('.ver_proveedor').html(response);
                    $('#modal_ver_dato').modal('show');
                    
                }
            });


        });
    });
</script>


<?php include "../recursos/footer.php"?>