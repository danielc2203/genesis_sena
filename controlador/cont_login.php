<?php
session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql=$conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$password'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["usuario"]=$datos->usuario;
            $_SESSION["nombre"]=$datos->nombres;
            $_SESSION["apellido"]=$datos->apellidos;
            $_SESSION["id"]=$datos->id_usr;
            header("Location: inicio.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>Usuario o Contraseña incorrectos</div>";
        }
        

    } else {
        echo "<div class='alert alert-danger' role='alert'>Los campos estan vacios</div>";
    }
    
}

?>