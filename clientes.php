<?php  require "recursos/header.php"?>

<br><br>
<div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Este es el Formulario de Clientes</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="usuario">ID</label>
                        <input type="text" class="form-control" id="textID" name="textID" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="usuario">Nombres</label>
                        <input type="text" class="form-control" id="textNombre" name="textNombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="usuario">Empresa</label>
                        <input type="text" class="form-control" id="textEmpresa" name="textEmpresa" placeholder="Empresa">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
      
    <div class="col-md-8">
        <div class="card" >
            <div class="card-header">
                <h4 class="card-title">Lista de Clientes</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombres del cliente</th>
                            <th scope="col">Empresa</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container"></div>
<br>



