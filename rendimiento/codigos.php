<?php
session_start();
require '../modelo/conexion.php';
require 'mensaje.php';


if(isset($_POST['borrar_registro']))
{
    $proveedores_id = mysqli_real_escape_string($conexion, $_POST['borrar_registro']);

    $query = "DELETE FROM rendimiento WHERE id='$proveedores_id' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run)
    {
        $_SESSION['mensaje'] = "Se ha Eliminado la informaciòn correctamente !";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensaje'] = "La informaciòn No ha sido Borrada";
        header("Location: index.php");
        exit(0);
    }
}

//--- ACTUALIZAR PROVEEDORES ---//

if(isset($_POST['update_registro']))
{
    $proveedores_id = mysqli_real_escape_string($conexion, $_POST['proveedores_id']);

    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $clase = mysqli_real_escape_string($conexion, $_POST['clase']);
    $cantidad = mysqli_real_escape_string($conexion, $_POST['cantidad']);    
    $peso_pie = mysqli_real_escape_string($conexion, $_POST['peso_pie']);
    $peso_canal = mysqli_real_escape_string($conexion, $_POST['peso_canal']);
    $costo_unit_x_kilo= mysqli_real_escape_string($conexion, $_POST['costo_unit_x_kilo']);
    $bono_venta= mysqli_real_escape_string($conexion, $_POST['bono_venta']);
    $costo_sacrificio= mysqli_real_escape_string($conexion, $_POST['costo_sacrificio']);
    $costo_transporte= mysqli_real_escape_string($conexion, $_POST['costo_transporte']);
    $valor_viceras= mysqli_real_escape_string($conexion, $_POST['valor_viceras']);

    $query = "UPDATE rendimiento SET fecha='$fecha',
                                     nombre='$nombre',
                                     clase='$clase',
                                     cantidad='$cantidad',
                                     peso_pie='$peso_pie',
                                     peso_canal='$peso_canal',
                                     costo_unit_x_kilo='$costo_unit_x_kilo',
                                     bono_venta='$bono_venta',
                                     costo_sacrificio='$costo_sacrificio',
                                     costo_transporte='$costo_transporte',
                                     valor_viceras='$valor_viceras'
                                                                         
                                 WHERE id='$proveedores_id' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run)
    {
        $_SESSION['mensaje'] = " La base ha sido actualizada con exito !";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensaje'] = "La base de datos No ha sido actualizada";
        header("Location: index.php");
        exit(0);
    }

}

//--- CREAR PROVEEDORES ---//

if(isset($_POST['save_rendimiento']))
{
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $clase = mysqli_real_escape_string($conexion, $_POST['clase']);
    $cantidad = mysqli_real_escape_string($conexion, $_POST['cantidad']);    
    $peso_pie = mysqli_real_escape_string($conexion, $_POST['peso_pie']);
    $peso_canal = mysqli_real_escape_string($conexion, $_POST['peso_canal']);
    $costo_unit_x_kilo= mysqli_real_escape_string($conexion, $_POST['costo_unit_x_kilo']);
    $bono_venta= mysqli_real_escape_string($conexion, $_POST['bono_venta']);
    $costo_sacrificio= mysqli_real_escape_string($conexion, $_POST['costo_sacrificio']);
    $costo_transporte= mysqli_real_escape_string($conexion, $_POST['costo_transporte']);
    $valor_viceras= mysqli_real_escape_string($conexion, $_POST['valor_viceras']);

    $query = "INSERT INTO rendimiento (fecha, nombre, clase, cantidad, peso_pie, peso_canal, valor_viceras, bono_venta, costo_sacrificio, costo_transporte, valor_viceras )
                            VALUES ('$fecha', '$nombre', '$clase', '$cantidad', '$peso_pie', '$peso_canal', '$valor_viceras', '$bono_venta', '$costo_sacrificio', '$costo_transporte', '$valor_viceras')";

    //$query = "INSERT INTO `proveedores` (`id`, `nombres`, `telefono`, `correo`, `ubicacion`) VALUES (NULL, '$nombres', '$telefono', '$correo', '$ubicacion')";

    $query_run = mysqli_query($conexion, $query);
    if($query_run)
    {
        $_SESSION['mensaje'] = "Datos Enviados Exitosamente";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensaje'] = "La informaciòn no podido ser enviada";
        header("Location: index.php");
        exit(0);
    }
}

?>