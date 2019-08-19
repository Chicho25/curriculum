
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Inicio</title>

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

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Proveedores</h6>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/vidrio.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Botellas de Vidrio</strong>
        Botellas de vidrio | <b>2 toneladas</b> | Nombre del Proveedor | Nicaragua | Precio 2000 $. | <small>01/08/2019</small>
      </p>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/papel.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Papel</strong>
        Papel de Reciclaje | <b>800 Kg</b> | Nombre del Proveedor | China | Precio 600 $. | <small>05/08/2019</small>
      </p>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/plastico.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Plastico</strong>
        Plastico | <b>1500 kg</b> | Nombre del Proveedor | Panamá | Precio 600 $. | <small>10/08/2019</small>
      </p>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">Ver todos</a>
    </small>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Clienetes</h6>
    <div class="media text-muted pt-3">
      <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/metal.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Metal</strong>
          <a href="#"></a>
        </div>
        <span class="d-block">Se requiere 500 Kg de metal | Panamá | Nombre del Cliente | <small>10/08/2019</small></span>
      </div>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/carton.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Carton</strong>
          <a href="#"></a>
        </div>
        <span class="d-block">Se requiere 300 Kg de carton | Los Santos | Nombre del Cliente | <small>16/08/2019</small></span>
      </div>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/aluminio.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Aluminio</strong>
          <a href="#"></a>
        </div>
        <span class="d-block">Se requiere 1000 Kg de aluminio | Coronado | Nombre del Cliente | <small>11/08/2019</small></span>
      </div>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">Ver todos</a>
    </small>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/offcanvas/offcanvas.js"></script></body>
</html>
