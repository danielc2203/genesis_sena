<?php  require "recursos/header.php"?>



<!-- Menu Circular -->

<link rel="stylesheet" href="CSS/menud.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/17621849bc.js" crossorigin="anonymous"></script>

<section class="vh-100 gradient-custom">

    <div class="links">
    <ul class="links__list" style="--item-total:5">
        <li class="links__item" style="--item-count:1">
        <a class="links__link" href="<?php echo $url;?>/proveedores/index.php">
            <i class="fa-solid fa-user-plus fa-3x"></i>
            <span class="links__text">Proveedores</span>
        </a>
        </li>
        <li class="links__item" style="--item-count:2">
        <a class="links__link" href="<?php echo $url;?>/rendimiento/index.php">
            <i class="fa-solid fa-coins fa-3x"></i>
            <span class="links__text">Trazabilidad</span></a>
        </li>
        <li class="links__item" style="--item-count:3">
        <a class="links__link" href="#">
            <i class="fa-solid fa-file-pdf fa-3x"></i>
            <span class="links__text">Reportes</span></a>
        </li>
        <li class="links__item" style="--item-count:4">
        <a class="links__link" href="<?php echo $url;?>/usuarios/index.php">
            <i class="fa-solid fa-users fa-3x"></i>
            <span class="links__text">usuarios</span></a>
        </li>
        <li class="links__item" style="--item-count:5">
        <a class="links__link" href="controlador/cont_salir.php">
            <i class="fa-solid fa-solid fa-circle-xmark fa-3x"></i>
            <span class="links__text">Salir</span></a>
        </li>
    </ul>
    </div>
</section>

<!-- Menu Circular -->

<?php include "recursos/footer.php"?>
