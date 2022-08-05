<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Genesis - Proyecto Sena 2022">
    <meta name="authorEmail" content="danielc2203@gmail.com">
    <meta name="authorURI" content="https://www.jdanielcastro.com">
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
    <title>Genesis - Sena 2022</title>
</head>
<body>
<header>
</header>
<link rel="stylesheet" href="CSS/estilosd.css">

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-80">
    <div class="row d-flex justify-content-center align-items-center h-80">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 2rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-15 mt-md-2 pb-5">
            <img src="img/logo001.jpeg" alt="Logo" class="img-thumbnail" width="150">

            <form action="" method="post">
              <h2 class="fw-bold mb-15 text-uppercase">Login Genesis</h2>
              
              <p class="text-white-50 mb-2">Por favor ingrese su usuario y contraseña asignados!</p>
              <?php
              include "modelo/conexion.php";
              include "controlador/cont_login.php";
              ?>

              <div class="form-outline form-white mb-2">
                <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Usuario</label>
              </div>

              <div class="form-outline form-white mb-2">
                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Contraseña</label>
              </div>

              <p class="small mb-15 pb-lg-2"><a class="text-white-50" href="#!">Recuperar Contraseña?</a></p>

              <input name="btningresar" class="btn btn-outline-light btn-lg px-5" type="submit" value="Ingresar">
            </form>

            </div>

            <div>
              <p class="mb-0">No tienes una cuenta? <a href="#!" class="text-white-50 fw-bold"> Crear Una Cuenta</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "recursos/footer.php"?>