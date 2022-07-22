<?php
    if(isset($_SESSION['mensaje'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Felicitaciones, <?php $_SESSION["usuario"]; ?></strong> <?= $_SESSION['mensaje']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['mensaje']);
    endif;
?>