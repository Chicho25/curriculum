<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Productos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/offcanvas/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <?php include('menu.php'); ?>

<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="main.php">Inicio</a>
    <!--<a class="nav-link" href="#">
      Friends
      <span class="badge badge-pill bg-light align-text-bottom">27</span>
    </a>-->
    <a class="nav-link" href="#">Reporte de Reserva</a>
    <a class="nav-link" href="#">Reporte de Botes</a>
    <a class="nav-link" href="#">Estado de Cuentas</a>
    <a class="nav-link" href="#">Reporte de Proveedores</a>
  </nav>
</div>

<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" style="background-color:#1c7c1a;">
    <img class="mr-3" src="logo/min1i.png" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Materiales</h6>
      <small>Materiales de reciclaje</small>
    </div>
  </div>

  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Aluminio</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 40 Toneladas.<br>
      Precio por Kg: 5$.<br>
      </p>
      <p class="card-text"><img src="logo/aluminio.png" width="200"></p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Papel</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 10 Toneladas.<br>
      Precio por Kg: 1$.<br>
      </p>
      <p class="card-text"><img src="logo/papel.png" width="200"></p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Metal</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 50 Toneladas.<br>
      Precio por Kg: 3$.<br>
      </p>
      <p class="card-text"><img src="logo/metal.png" width="200"></p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Vidrio</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 20 Toneladas.<br>
      Precio por Kg: 3$.<br>
      </p>
      <p class="card-text"><img src="logo/vidrio.png" width="200"></p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Carton</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 5 Toneladas.<br>
      Precio por Kg: 4$.<br>
      </p>
      <p class="card-text"><img src="logo/carton.png" width="200"></p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Plastico</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 10 Toneladas.<br>
      Precio por Kg: 8$.<br>
      </p>
      <p class="card-text"><img src="logo/plastico.png" width="200"></p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Botellas plásticas HDPE</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 11 Toneladas.<br>
      Precio por Kg: 8$.<br>
      </p>
      <p class="card-text"><img src="logo/pvc.png" width="200"></p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 15rem; float:left; margin-right:10px;">
    <div class="card-header">Hierro Colado</div>
    <div class="card-body">
      <p class="card-text">
      En stock: 18 Toneladas.<br>
      Precio por Kg: 11$.<br>
      </p>
      <p class="card-text"><img src="logo/hc.png" width="200"></p>
    </div>
  </div>
</main>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nombre de Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            Material: <b>Botellas de vidrio. </b><br>
            Cantidad: <b>2 toneladas.</b><br>
            Lugar: <b>Nicaragua. </b><br>
            Precio: <b>2000 $. </b><br>
            Fecha: <b>01/08/2019.</b><br><br>
            <input class="form-control" placeholder="Cantidad a Solicitar"><br>
            <input class="form-control" placeholder="Monto a Cancelar">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.3/examples/offcanvas/offcanvas.js"></script></body>
</html>
