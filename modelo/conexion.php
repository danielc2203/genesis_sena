<?php
$conexion=new mysqli("localhost","genesis","Genesis2022*","genesis_sena");
if(!$conexion){
    die('Connection Failed'. mysqli_connect_error());
}
$conexion->set_charset("utf8");
?>
