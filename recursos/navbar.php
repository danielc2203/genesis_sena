<?php $url="http://".$_SERVER['HTTP_HOST']."/genesis_sena"?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->

    <a class="navbar-brand" href=<?php echo $url;?>>Genesis</a>
    
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

    
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" aria-current="page" href="<?php echo $url;?>">
            <div>
              <i class="fas fa-home fa-lg mb-1"></i>
            </div>
            Inicio
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="fa-solid fa-file-pdf fa-lg mb-1"></i>
            </div>
            Reportes
          </a>
        </li>

        <li class="nav-item dropdown text-center mx-2 mx-lg-1">
          <a class="nav-link dropdown-toggle" href="<?php echo $url;?>/rendimiento/index.php" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            <div>
              <i class="fa-solid fa-users fa-lg mb-1"></i>
              <!-- <span class="badge rounded-pill badge-notification bg-primary">35</span> -->
            </div>
            Trazabilidad
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $url;?>/rendimiento/index.php">Rendimiento</a></li>
            <li><a class="dropdown-item" href="<?php echo $url;?>/proveedores/index.php">Proveedores</a></li>
            <li><a class="dropdown-item" href="<?php echo $url;?>">Costos</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">Estadisticas de Trazabilidad</a>
            </li>
          </ul>
        </li>
  
      </ul>
      <!-- Left links -->

      <h3 class="text-info">Hola</h3>
      <h3 class="text-capitalize text-info">. <?php echo $_SESSION['usuario'];?></h3>

      

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="fas fa-bell fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-info">11</span>
            </div>
            Mensajes
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="<?php echo $url;?>/controlador/cont_salir.php">
            <div>
                <span style="color: Tomato;">
                    <i class="fa-solid fa-arrow-right-from-bracket mb-1"></i>
                </span>    
            </div>
            Salir
          </a>
        </li>
      </ul>
      <!-- Right links -->

      <!-- Search form -->
      <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
        <input type="search" class="form-control" placeholder="Buscar" aria-label="Search" />
        <button class="btn btn-primary" type="button" data-mdb-ripple-color="dark">
          Buscar
        </button>
      </form>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->