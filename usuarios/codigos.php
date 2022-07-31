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
        $_SESSION['correcto'] = "Se ha Eliminado la informaciòn correctamente !";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['error'] = "La informaciòn No ha podido ser Borrada";
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
    
    $query = "UPDATE usuarios SET nombres='$nombres',
                                     apellidos='$apellidos',
                                     usuario='$usuario',
                                     correo='$correo',
                                     telefono='$telefono'
                                     

                                 WHERE id_usr='$registro_id' ";

    $query_run = mysqli_query($conexion, $query);
    

    if($query_run)
    {
        $_SESSION['correcto'] = "El usuario ha sido actualizado con exito !";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['error'] = "Los cambios NO fueron realizados, la información NO ha sido actualizada";
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
    $confirm_password= mysqli_real_escape_string($conexion, $_POST['confirm_password']);

    if ($clave == $confirm_password) {
        $query = "INSERT INTO usuarios (nombres, apellidos, usuario, telefono, correo, clave )
                         VALUES ('$nombres', '$apellidos', '$usuario', '$telefono', '$correo', MD5('".$clave."'))";

    $query_run = mysqli_query($conexion, $query);
    }else{
        $_SESSION['error'] = "Las contraseñas no coinciden";
        header("Location: index.php");
        exit(0);
    }

    if($query_run)
    {
        $_SESSION['correcto'] = "El usuario ha sido creado correctamente.";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['error'] = "La informaciòn no podido ser enviada";
        header("Location: index.php");
        exit(0);
    }
}

?>