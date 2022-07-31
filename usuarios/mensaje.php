<?php
    if(isset($_SESSION['error'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> <?php $_SESSION["usuario"]; ?></strong> <?= $_SESSION['error']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['error']);
    endif;
?>

<?php
    if(isset($_SESSION['correcto'])) :
?>

    <div class="alert alert-success" role="alert">
        <strong> <?php $_SESSION["usuario"]; ?></strong> <?= $_SESSION['correcto']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['correcto']);
    endif;
?>