
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
      <h6 class="mb-0 text-white lh-100">Registrar Proveedor</h6>
      <small>Registro de Proveedor</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
  <form>
  <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Nombre</label>
        <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-6">
        <label for="inputState">Seleccionar Categoria</label>
        <select id="inputState" class="form-control">
            <option selected>Categoria 1</option>
            <option>Categoria 2</option>
            <option>Categoria 3</option>
        </select>
        </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputCity">Razon Social</label>
      <input type="text" class="form-control" id="inputCity">
      </div>
        <div class="form-group col-md-6">
        <label for="inputState">Seleccionar Pais</label>
        <select id="inputState" class="form-control">
            <option selected>Pais 1</option>
            <option>Pais 2</option>
            <option>Pais 3</option>
        </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Descripccion</label>
        <textarea class="form-control" id="inputAddress" placeholder="Monto"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" style="background-color:#1c7c1a;">Registrar</button>
   </form>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">

  </div>

</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/offcanvas/offcanvas.js"></script></body>
</html>
