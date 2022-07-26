<?php  
    require "../recursos/header.php";
    require ('datos.php');
    include "../modelo/conexion.php";
    include ("mensaje.php");
?>


<!-- Proveedores -->

<!--<link rel="stylesheet" href="../CSS/menud.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/17621849bc.js" crossorigin="anonymous"></script>

<br><br><br>


    <div class="container mt-5">

<div class="row justify-content-md-center">
    <div class="col-md-6 ">
        <div class="card">
            <div class="card-header">
                <h4>Detalles de Trazabilidad My Genesis
                    <a href="index.php" class="btn btn-danger float-end">Volver</a>
                </h4>
            </div>
            <div class="card-body">

                <?php
                if(isset($_GET['id']))
                {
                    $proveedores_id = mysqli_real_escape_string($conexion, $_GET['id']);
                    $query = "SELECT * FROM rendimiento WHERE id='$proveedores_id' ";
                    $query_run = mysqli_query($conexion, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $proveedores = mysqli_fetch_array($query_run);
                        ?>

                        <div class="row">
                            <div class="col">
                                <label>Fecha</label>
                                <p class="form-control">
                                    <?=$proveedores['fecha'];?>
                                </p>
                            </div>
                            <div class="col">
                                <label>Nombre</label>
                                <p class="form-control">
                                    <?=$proveedores['nombre'];?>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Clase</label>
                                <p class="form-control">
                                    <?=$proveedores['clase'];?>
                                </p>
                                </div>
                            <div class="col">
                                <label>Cantidad</label>
                                <p class="form-control">
                                    <?=$proveedores['cantidad'];?>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Peso en Pie</label>
                                <p class="form-control">
                                    <?=$proveedores['peso_pie'];?> kg
                                </p>
                                </div>
                            <div class="col">
                                <label>Peso en Canal</label>
                                    <p class="form-control">
                                        <?=$proveedores['peso_canal'] ;?> Kg
                                    </p>
                            </div>
                        </div>
                        	
                        <div class="row">
                            <div class="col">
                                <label>Costo Unitario x Kilo</label>
                                <p class="form-control">
                                    <?=$proveedores['costo_unit_x_kilo'];?> $
                                </p>
                                </div>
                            <div class="col">
                                <label>Bono de Venta</label>
                                    <p class="form-control">
                                        <?=$proveedores['bono_venta'] ;?> $
                                    </p>
                            </div>
                        </div>
                        		
                        <div class="row">
                            <div class="col">
                                <label>Costo de Sacrificio</label>
                                <p class="form-control">
                                    <?=$proveedores['costo_sacrificio'];?> $
                                </p>
                                </div>
                            <div class="col">
                                <label>Costo de Transporte</label>
                                    <p class="form-control">
                                        <?=$proveedores['costo_transporte'] ;?> $
                                    </p>
                            </div>
                            <div class="col">
                                <label>Valor de Vicera</label>
                                    <p class="form-control">
                                        <?=$proveedores['valor_viceras'] ;?> $
                                    </p>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col">
                                <label>Rendimiento</label>
                                <?php
                                    //$valor= $proveedores['peso_pie']/2-$proveedores['peso_canal'];
                                    $valor1 = $proveedores['peso_canal'];
                                    $valor2= $proveedores['peso_pie']/2;
                                    $valor = $valor1 - $valor2;
                                ?>
                                <?php if($valor < 1) { ?>
                                    <div class="p-3 mb-2 bg-danger text-white"><?= $valor?></div>
                                <?php }else { ?>
                                    <div class="p-3 mb-2 bg-success text-white"><?= $valor?></div>
                                <?php } ?>    
                            </div>

                            <div class="col">
                                <label>Costo Total de Animal</label>
                                <?php
                                    //$valor= $proveedores['peso_pie']/2-$proveedores['peso_canal'];
                                    $ctotal1 = $proveedores['cantidad'] * $proveedores['peso_pie'];
                                    $ctotal= $ctotal1 * $proveedores['costo_unit_x_kilo']-$proveedores['bono_venta'];
                                ?>
                                <div class="p-3 mb-2 bg-primary text-white number" id="pesos">$ <?= number_format($ctotal), "\n" ?></div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col">
                                <label>Total 1</label>
                                <?php
                                    //$valor= $proveedores['peso_pie']/2-$proveedores['peso_canal'];
                                    $total1 = $ctotal + $proveedores['costo_sacrificio'] + $proveedores['costo_transporte'];
                                ?>
                                <div class="p-3 mb-2 bg-secondary text-white number" id="pesos">$ <?= number_format($total1), "\n" ?></div>
                            </div>

                            <div class="col">
                                <label>Total 2</label>
                                <?php
                                    //$valor= $proveedores['peso_pie']/2-$proveedores['peso_canal'];
                                    $total2 = $ctotal + $proveedores['costo_sacrificio'] + $proveedores['costo_transporte'] - $proveedores['valor_viceras'];
                                ?>
                                <div class="p-3 mb-2 bg-secondary text-white number" id="pesos">$ <?= number_format($total2), "\n" ?></div>
                            </div>

                            <div class="col">
                                <label>Valor Kilo Canal</label>
                                <?php
                                    //$valor= $proveedores['peso_pie']/2-$proveedores['peso_canal'];
                                    $total3 = $ctotal / $proveedores['peso_canal'];
                                ?>
                                <div class="p-3 mb-2 bg-secondary text-white number" id="pesos">$ <?= number_format($total3), "\n" ?></div>
                            </div>
                            
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

