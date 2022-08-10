<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Genesis - Proyecto Sena 2022  - Karol - Dina - DanielC">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
    rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    

    <title>Genesis - Sena 2022</title>
</head>
<body>
<header>
  
<?php $url="http://".$_SERVER['HTTP_HOST']."/genesis_sena" ?>

<?php
  session_start();
  if (empty($_SESSION["usuario"])) {
      header("Location: $url/login.php");
  }
?>
<?php
  include "navbar.php";
?>
</header>



<!-- Modal de Ayuda-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Necesitas Ayuda?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="card-title">Contactanos para ayudarte</h5>
        <p class="card-text">Nuestro Equipo resolvera tus dudas en un tiempo oportuno.</p>
        <a href="#" class="btn btn-outline-primary">Hablar con Karo</a></br></br>
        <a href="#" class="btn btn-outline-warning">Hablar con Daniel</a></br></br>
        <a href="#" class="btn btn-outline-info">Hablar con Dina</a></br></br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>