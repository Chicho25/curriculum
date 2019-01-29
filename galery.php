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
    <?php }else{ ?>
			<article class="col-md-3">
				<a href="galery/images/img4.jpg" data-lightbox="example-set" data-title="Ház deporte">
				<img src="galery/images/img4.jpg" alt="Ház deporte" class="img-thumbnail"></a>
				<p>Ház deporte</p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/img5.jpg" data-lightbox="example-set" data-title="Vuela">
				<img src="galery/images/img5.jpg" alt="Vuela" class="img-thumbnail"></a>
				<p>Vuela</p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/img6.jpg" data-lightbox="example-set" data-title="Sueña">
				<img src="galery/images/img6.jpg" alt="Sueña" class="img-thumbnail"></a>
				<p>Sueña</p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/img7.jpg" data-lightbox="example-set" data-title="Viaja">
				<img src="galery/images/img7.jpg" alt="Viaja" class="img-thumbnail"></a>
				<p>Viaja</p>
			</article>
			<article class="col-md-3">
				<a href="galery/images/img8.jpg" data-lightbox="example-set" data-title="Relájate">
				<img src="galery/images/img8.jpg" alt="Relájate" class="img-thumbnail"></a>
				<p>Relájate</p>
			</article>
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
