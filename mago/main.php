
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
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="index.php">Majo Software</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reservas</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="register_trip.php">Registrar reservacion</a>
          <a class="dropdown-item" href="#">Ver Reservaciones</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="register_trip.php">Registrar Cliente</a>
          <a class="dropdown-item" href="#">Ver Clientes</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bancos</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Registrar Bancos</a>
          <a class="dropdown-item" href="#">Ver Bancos</a>
          <a class="dropdown-item" href="#">Registrar Cuenta</a>
          <a class="dropdown-item" href="#">Ver Cuentas</a>
          <a class="dropdown-item" href="#">Registrar Chequera</a>
          <a class="dropdown-item" href="#">Ver Chequeras</a>
          <a class="dropdown-item" href="#">Registrar Movimiento Bancario</a>
          <a class="dropdown-item" href="#">Ver Movimiento Bancario</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Items</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Registrar Bote</a>
          <a class="dropdown-item" href="#">Ver Botes</a>
          <a class="dropdown-item" href="#">Registrar Paquete</a>
          <a class="dropdown-item" href="#">Ver Paquete</a>
          <a class="dropdown-item" href="#">Registrar Equipo </a>
          <a class="dropdown-item" href="#">Ver Equipos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proveedores</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Registrar Proveedor</a>
          <a class="dropdown-item" href="#">Ver Proveedores</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Salir</a>
      </li>
    </ul>
  </div>
</nav>

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
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
    <img class="mr-3" src="logo/2.png" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Botes</h6>
      <small>Estatus de los botes</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Botes Reservados</h6>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Bote #1</strong>
        Bote Reservado desde 01/01/2020 hasta 01/01/2021 | <b>Viaje a Taboga</b> | Nombre de cliente | Capitan | Total 9000 $ .
      </p>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Bote #2</strong>
        Bote Reservado desde 01/01/2020 hasta 01/01/2021 | <b>Paquete de Viaje</b> | Nombre de cliente | Capitan | Total 9000 $ .
      </p>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Bote #3</strong>
        Bote Reservado desde 01/01/2020 hasta 01/01/2021 | <b>Avistamiento de Ballenas</b> | Nombre de cliente | Capitan | Total 9000 $ .
      </p>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">Ver todos</a>
    </small>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Botes Disponibles</h6>
    <div class="media text-muted pt-3">
      <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Bote #4</strong>
          <a href="#"></a>
        </div>
        <span class="d-block">Disponible</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Bote #5</strong>
          <a href="#"></a>
        </div>
        <span class="d-block">En mantenimiento preventivo</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="logo/3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"/>
    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Bote #6</strong>
          <a href="#"></a>
        </div>
        <span class="d-block">Disponible</span>
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
