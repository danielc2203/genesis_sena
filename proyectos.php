<?php  require "recursos/header.php"?>

<div class="card text-center">
  <div class="card-header">
    Bienvenid@
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $_SESSION["nombre"]; ?> <?php echo $_SESSION["apellido"]; ?></h5>
    <p class="card-text">Este es el proyecto genesis creado por Karol, Dina y Daniel del Sena.</p>
    <a href="#" class="btn btn-primary">Ver Clientes</a>
  </div>
  <div class="card-footer text-muted">
    Genesis 2022
  </div>
</div>


<?php require "recursos/footer.php"?>