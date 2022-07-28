<?php
session_start();
require '../modelo/conexion.php';
require 'mensaje.php';


if(isset($_POST['borrar_proveedores']))
{
    $proveedores_id = mysqli_real_escape_string($conexion, $_POST['borrar_proveedores']);

    $query = "DELETE FROM proveedores WHERE id='$proveedores_id' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run)
    {
        $_SESSION['mensaje'] = "El Proveedores ha sidp Eliminado correctamente !";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensaje'] = "El Proveedor No ha sido Borrado";
        header("Location: index.php");
        exit(0);
    }
}

//--- ACTUALIZAR PROVEEDORES ---//

if(isset($_POST['update_proveedores']))
{
    $proveedores_id = mysqli_real_escape_string($conexion, $_POST['proveedores_id']);

    $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $ubicacion = mysqli_real_escape_string($conexion, $_POST['ubicacion']);

    $query = "UPDATE proveedores SET nombres='$nombres', correo='$correo', telefono='$telefono', ubicacion='$ubicacion' WHERE id='$proveedores_id' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run)
    {
        $_SESSION['mensaje'] = " La base de Proveedores ha sido actualizada con exito !";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensaje'] = "La base de datos de Proveedores No ha sido actualizada";
        header("Location: index.php");
        exit(0);
    }

}

//--- CREAR PROVEEDORES ---//

if(isset($_POST['save_proveedor']))
{
    $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);    
    $ubicacion = mysqli_real_escape_string($conexion, $_POST['ubicacion']);

    $query = "INSERT INTO proveedores (nombres,telefono,correo,ubicacion) VALUES ('$nombres','$telefono','$correo','$ubicacion')";

    //$query = "INSERT INTO `proveedores` (`id`, `nombres`, `telefono`, `correo`, `ubicacion`) VALUES (NULL, '$nombres', '$telefono', '$correo', '$ubicacion')";

    $query_run = mysqli_query($conexion, $query);
    if($query_run)
    {
        $_SESSION['mensaje'] = "Proveedor Creado Exitosamente";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensaje'] = "El proveedor no ha sido creado";
        header("Location: index.php");
        exit(0);
    }
}

//--- MODAL VISTA PROVEEDORES---//

if(isset($_POST['check_ver_modal']))
{
    $s_id = $_POST['proveedor_id_actual'];
    //echo $return = $s_id;

    $query = "SELECT * FROM proveedores WHERE id ='$s_id'";
    $query_run = mysqli_query($conexion, $query);

        if(mysqli_num_rows($query_run) > 0){
            foreach($query_run as $proveedores)
            {
                echo $return = '
                <h5> ID:  '.$proveedores['id'].'</h5>
                <h5> Nombres:  '.$proveedores['nombres'].'</h5>
                <h5> Telefono:  '.$proveedores['telefono'].'</h5>
                <h5> Correo:  '.$proveedores['correo'].'</h5>
                <h5> Ubicacion:  '.$proveedores['ubicacion'].'</h5>
';
            }
        }
        else{
            echo $return = "<h5> No se econtro el registro  en la BD </h5>";
        }
}

?>