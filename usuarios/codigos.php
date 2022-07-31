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

//--- ACTUALIZAR REGISTRO ---//

if(isset($_POST['editar_usuario']))
{
    $registro_id = mysqli_real_escape_string($conexion, $_POST['usuario_id']);

    $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
    $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $clave = mysqli_real_escape_string($conexion, $_POST['clave']);

    $query = "UPDATE usuarios SET nombres='$nombres',
                                     apellidos='$apellidos',
                                     usuario='$usuario',
                                     correo='$correo',
                                     telefono='$telefono',
                                     clave='$clave'

                                 WHERE id_usr='$registro_id' ";
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

//--- CREAR USUARIOS ---//

if(isset($_POST['nuevo_usuario']))
{
    $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
    $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);    
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $clave= mysqli_real_escape_string($conexion, $_POST['clave']);

    $query = "INSERT INTO usuarios (nombres, apellidos, usuario, telefono, correo, clave )
                         VALUES ('$nombres', '$apellidos', '$usuario', '$telefono', '$correo', '$clave')";


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