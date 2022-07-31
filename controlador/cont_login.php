<?php
date_default_timezone_set('America/Bogota');
$hoy = date("Y-m-d H:i:s");  
echo $hoy;
session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql=$conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave= MD5('".$password."') ");

        if ($datos=$sql->fetch_object()) {
            $_SESSION["usuario"]=$datos->usuario;
            $_SESSION["nombre"]=$datos->nombres;
            $_SESSION["apellido"]=$datos->apellidos;
            $_SESSION["id"]=$datos->id_usr;

            $sql=$conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave= MD5('".$password."') ");

            $fecha=$conexion->query("UPDATE `usuarios` SET `ult_visita` = '$hoy' WHERE usuario='$usuario' ");
                    
            header("Location: inicio.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>Usuario o Contraseña incorrectos</div>";
        }
        

    } else {
        echo "<div class='alert alert-danger' role='alert'>Los campos estan vacios</div>";
    }
    
}


?>