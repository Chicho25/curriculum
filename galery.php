<!DOCTYPE html>
<html lang="es">
<head>
  <title>Pedro Arrieta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="galery/lightbox/css/lightbox.min.css">
  <style>
		header{text-align:center;}
		article img{max-height:180px;}
		article p,footer p{text-align:center;}
  </style>
</head>
<body>
	<header>
    <h1>Galeria de Proyectos</h1>
	</header>
	<div class="container galeria">
		<articles class="row">
      <?php if (isset($_GET['id']) && $_GET['id'] == 1) { ?>
			<article class="col-md-3">
				<a href="galery/images/img1.jpg" data-lightbox="example-set" data-title="Regala">
				<img src="galery/images/img1.jpg" alt="Regala" class="img-thumbnail" height="180" width="265"></a>
				<p>Dashboar I</p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/img2.jpg" data-lightbox="example-set" data-title="Descansa">
				<img src="galery/images/img2.jpg" alt="Descansa" class="img-thumbnail" height="180" width="265"></a>
				<p>Dashboar II</p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/img3.jpg" data-lightbox="example-set" data-title="Empatiza">
				<img src="galery/images/img3.jpg" alt="Empatiza" class="img-thumbnail" height="180" width="265"></a>
				<p>Orden de Trabajo</p>
			</article>
    <?php }elseif(isset($_GET['id']) && $_GET['id'] == 2){ ?>
			<article class="col-md-3">
				<a href="galery/images/4.jpg" data-lightbox="example-set" data-title="Ház deporte">
				<img src="galery/images/4.jpg" alt="Ház deporte" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/5.jpg" data-lightbox="example-set" data-title="Vuela">
				<img src="galery/images/5.jpg" alt="Vuela" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/6.jpg" data-lightbox="example-set" data-title="Sueña">
				<img src="galery/images/6.jpg" alt="Sueña" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/7.jpg" data-lightbox="example-set" data-title="Viaja">
				<img src="galery/images/7.jpg" alt="Viaja" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/8.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/8.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/9.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/9.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/10.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/10.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/11.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/11.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
      <?php }elseif(isset($_GET['id']) && $_GET['id'] == 3){ ?>
			<article class="col-md-3">
				<a href="galery/images/14.jpg" data-lightbox="example-set" data-title="Vuela">
				<img src="galery/images/14.jpg" alt="Vuela" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/15.jpg" data-lightbox="example-set" data-title="Sueña">
				<img src="galery/images/15.jpg" alt="Sueña" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/16.jpg" data-lightbox="example-set" data-title="Viaja">
				<img src="galery/images/16.jpg" alt="Viaja" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/17.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/17.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/18.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/18.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/19.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/19.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/20.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/20.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>

	  <?php }elseif(isset($_GET['id']) && $_GET['id'] == 4){ ?>

      <article class="col-md-3">
				<a href="galery/images/21.jpg" data-lightbox="example-set" data-title="Vuela">
				<img src="galery/images/21.jpg" alt="Vuela" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/22.jpg" data-lightbox="example-set" data-title="Sueña">
				<img src="galery/images/22.jpg" alt="Sueña" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/23.jpg" data-lightbox="example-set" data-title="Viaja">
				<img src="galery/images/23.jpg" alt="Viaja" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/24.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/24.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/25.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/25.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/32.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/32.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/33.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/33.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>

    <?php }elseif(isset($_GET['id']) && $_GET['id'] == 5){ ?>

      <article class="col-md-3">
				<a href="galery/images/26.jpg" data-lightbox="example-set" data-title="Sueña">
				<img src="galery/images/26.jpg" alt="Sueña" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/27.jpg" data-lightbox="example-set" data-title="Viaja">
				<img src="galery/images/27.jpg" alt="Viaja" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/28.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/28.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/29.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/29.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/30.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/30.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/31.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/31.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p></p>
			</article>

    <?php }elseif(isset($_GET['id']) && $_GET['id'] == 6){ ?>

    <?php } ?>
		</articles>
	</div>
	<footer>
		<p>Pedro Arrieta</p>
	</footer>

  <script src="galery/lightbox/js/lightbox.min.js"></script>
  <script>
	  lightbox.option({
		'albumLabel': "Imagen %1 de %2"
	  })
  </script>
</body>
</html>
