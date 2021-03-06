
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Registrar Reserva</title>

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
  <a class="navbar-brand mr-auto mr-lg-0" href="#">Majo Software</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
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
      <h6 class="mb-0 text-white lh-100">Registrar Reserva</h6>
      <small>Registrar Reserva o Paquete de viaje</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
  <form>
  <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Nombre de la Reserva</label>
        <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-6">
        <label for="inputState">Seleccionar Bote</label>
        <select id="inputState" class="form-control">
            <option selected>Bote 1</option>
            <option>Bote 2</option>
            <option>Bote 3</option>
        </select>
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputState">Seleccionar Cliente</label>
        <select id="inputState" class="form-control">
            <option selected>Cliente 1</option>
            <option>Cliente 2</option>
            <option>Cliente 3</option>
        </select>
        </div>
        <div class="form-group col-md-6">
        <label for="inputState">Seleccionar Proveedor(capitan)</label>
        <select id="inputState" class="form-control">
            <option selected>Capitan 1</option>
            <option>Paladar 2</option>
            <option>Proveedor 3</option>
        </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Fecha 1(Desde)</label>
        <input type="date" class="form-control" id="inputEmail4" placeholder="Fecha desde">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Fecha 2(Hasta)</label>
        <input type="date" class="form-control" id="inputPassword4" placeholder="Fecha hasta">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Monto</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Monto">
    </div>
    <div class="form-group">
        <label for="inputAddress">ITBMS</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="ITBMS">
    </div>
    <div class="form-group">
        <label for="inputAddress2">TOTAL</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="TOTAL">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
   </form>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    
  </div>

</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/offcanvas/offcanvas.js"></script></body>
</html>
