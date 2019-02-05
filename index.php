<?php
	$mensaje = "";
	if (isset($_POST['mensaje'])) {

		$subject = 'Curriculum WEB: '.$_POST['nombre'];
		$email_cv = "pedroarrieta25@hotmail.com";
		$to = $email_cv;
		$conpania_nombre = 'CV';
		$repName = 'Pedro Arrieta';
		$eol = PHP_EOL;
		$separator = md5(time());
		$headers = 'From: '.$repName.' <'.$_POST['email'].'>'.$eol;
		$headers .= 'MIME-Version: 1.0' .$eol;
		$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";
		$message = "--".$separator.$eol;
		$message .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
		$message .= "Mensaje evniado desde la web CV." .$eol;
		$message .= "Nombre: ".$_POST['nombre'].' '.$eol;
		$message .= "Email: .".$_POST['email'].' '.$eol;
		$message .= "Asunto:".$_POST['asunto'].' '.$eol;
		$message .= "Mensaje: ".$_POST['mensaje'].' '.$eol;
		$message .= "--".$separator.$eol;
		$message .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
		$message .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
		$message .= "--".$separator.$eol;
		$message .= "Content-Type: application/pdf; name=\"".$fileName."\"".$eol;
		$message .= "Content-Transfer-Encoding: base64".$eol;
		$message .= "Content-Disposition: attachment".$eol.$eol;
		$message .= $attachment.$eol;
		$message .= "--".$separator."--";

		if(mail($to, $subject, $message, $headers)){
			$mensaje = '<div class="alert alert-successk alert-dismissible fade show" role="alert">
									  <strong>Mensaje Enviado!</strong> El mensaje fue enviado con exito, Pronto me estare comunicando con usted.
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>';
		}

	}
 ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pedro Arrieta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="hoja de vida, pedro arrieta, programador, project manager" />
	<meta name="keywords" content="pedro arrieta, programador, project manajer, developer" />
	<meta name="author" content="Pedro Arrieta" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<?php echo $mensaje; ?>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/pedroarrieta.jpg);"></div>
				<h1 id="colorlib-logo"><a href="index.html">Pedro Arrieta</a></h1>
				<span class="position"><a href="#">Desarrollador</a> ~ Project Manager</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Inicio</a></li>
						<li><a href="#" data-nav-section="about">Acerca de..</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Habilidades</a></li>
						<li><a href="#" data-nav-section="education">Educacion</a></li>
						<li><a href="#" data-nav-section="experience">Experiencia</a></li>
						<li><a href="#" data-nav-section="work">Portafolio</a></li>
						<li><a href="#" data-nav-section="contact">Contacto</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1><br>Lenguajes</h1>
						   					<h2>Programacion <a href="https://colorlib.com/" target="_blank">mipagina.com</a></h2>
												<p><a class="btn btn-primary btn-learn">Descargar CV <i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1><br>Project Manajer</h1>
												<h2>Direccion de proyectos<a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">Descargar CV <i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">Acerca de..</span>
										<h2 class="colorlib-heading">Quien soy?</h2>
										<p>Nombre: <strong>Pedro Arrieta</strong> <br>
										   Edad: <strong>31</strong><br>
										   Nacionalidad: <strong>Venezolano</strong><br>
										   Direccion: <strong>Panama, Panama</strong> <br>
										   Tipo de documento: <strong>Cedula E</strong>
										</p>
											<p>Soy Pedro Arrieta, Venezolano, llevo mas de 5 años viviendo en Panamá como residente permanente cedulado.
											Estoy altamente preparado como programador web, con un largo recorrido en desarrollo de aplcaciones y gestión de proyectos y un
											historial de trabajos cercanos con las empresas para obtener óptimos resultados.
											Mi objetivo como programador es desarrollar sistemas creativos, funcionales y tecnológicamente avanzados.
										</p>
										<p>Mi deseo de ayudar a las empresas a conseguir sus objetivos, mejorando y automatizando sus procesos,
											incluyendo la colaboración estrecha y la resolución de problemas.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>Project Manager</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-code"></i></span>
										<h3>Porgramador</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>DBA</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="icon-phone3"></i></span>
										<h3>PWA</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>Portafolio <br>Más de 100+ proyectos realizados!</h2>
										<!--<a href="#" class="btn-hire">Aqui</a>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Lo que hago?</span>
							<h2 class="colorlib-heading">UN POCO SOBRE MI EXPERIENCIA</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>PROJECT MANAGER</h3>
									<p>Direccion, gestion y documentación de proyectos tecnologicos.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-code"></i>
								</span>
								<div class="desc">
									<h3>PROGRAMADOR</h3>
									<p>Desarrollador web con mas de 10 años de experiencia en el area tecnologica</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>PWA</h3>
									<p>Trabajando con las mejores opciones del mercado para el desarrollo movil</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>LENGUAJES</h3>
									<p>html5, css3, javascript, php, nodejs, jquery, python, ... entre otras</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-5">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>DBA</h3>
									<p> Mysql, SQL, SQLServer. Administrador de bases de datos, creación de reportes</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-6">
								<span class="icon">
									<i class="icon-globe-outline"></i>
								</span>
								<div class="desc">
									<h3>INTERNACIONAL</h3>
									<p>Experiencia de grupos de trabajo con desarrolladores de multiples paises</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!--
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Cups of coffee</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Clients</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partners</span>
						</div>
					</div>
				</div>
			</div>-->

			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Mis especialidades</span>
							<h2 class="colorlib-heading animate-box">Mis Habilidades</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p>En mi experiencia he utilizado diversos lenguajes de programación para fronend y backend, bases de datos, framework y multiples herramientas para lograr el desarrollo y automatización de sistemas</p>
							<p></p>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>PHP</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="95"
								  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
								    <span>95%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>jQuery</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>60%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>HTML5</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>CSS3</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>WordPress</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
								  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
								    <span>70%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>javascript</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Raspberry 3</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>60%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>NodeJs</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>60%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Python</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="35"
								  	aria-valuemin="0" aria-valuemax="100" style="width:35%">
								    <span>35%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Soporte</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="95"
								  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
								    <span>95%</span>
								  	</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Educación</span>
							<h2 class="colorlib-heading animate-box">Educación</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Ingeniero en sistemas
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p>Universisdad Jose Gregorio Hernandez</p>
										      		</div>
										      		<div class="col-md-6">
										      			<p>Maracaibo - Zulia - Venezuela</p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachiller en Ciencias
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p><strong>Unidad Educativa, Creacion V Caja seca</strong></p>
													<ul>
														<li>Sucre - Zulia - Venezuela</li>
													</ul>
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experiencia</span>
							<h2 class="colorlib-heading animate-box">Experiencia Laboral</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="#">Encargado del Departamento de Computo</a> <span>2017-2019</span></h2>
					                  <p><strong>Empresa:</strong> Gruas SHL.</p>
														<p><strong>Responsabilidades:</strong> - Desarrollar sistemas informáticos para agilizar procesos, - Dirigir proyectos informatiocs, - Mantener en óptimo funcionamiento
														todos los equipos de cómputo, tales como: computadores, tabletas, proyectores, laptops, control de accesos,
														- Mantener comunicacion constante con los proveedores y supervisar instalaciones, - Mantener en óptimo funcionamiento
														la red local de la empresa y los equipos de redes, tales como, router, antenas de largo alcance, vpn, switch, firewall </p>
					               </div>
					            </div>
					         </article>


					         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-2">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Programador - Proyect Manager</a> <span>2015-2017</span></h2>
					                  <p><strong>Empresa:</strong> Grupo 212 - dChain.</p>
														<p><strong>Responsabilidades:</strong> - Desarrollar sistemas informaticos, - Dirigir Proyectos informaticos, - Hacer testing a las aplicaciones desarrolladas por gurpos de desarroladores de diversos paises,
															 - Instalar aplicaciones desarrolladas, - Capacitar a los usuarios finales para su porterior uso, - Soporte y mantenimiento de las aplicaciones desarrolladas.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-3">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Programador</a> <span>2014-2015</span></h2>
					                  <p><strong>Empresa:</strong> Grupo Primavera Holdig.</p>
														<p><strong>Responsabilidades:</strong>  - Desarrollar sistemas informaticos, -Instalar Aplicaciones desarrolladas, - Capacitar a los usuarios finales, para el ejercicio y uso de las aplicaciones,
														- Soporte y mantenimiento de las aplicaciones de la empresa, - Realizar Inventario, Soporte tecnico basico a los equipos de computo.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-4">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Coordinador de Sistemas</a> <span>2013-2014</span></h2>
					                  <p><strong>Empresa: </strong>Hotel Kristoff.</p>
														<p><strong>Responsabilidades: </strong> Soporte y mantenimiento de todos los equipos de computo en el hotel.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-5">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Programador Jr.</a> <span>2012-2013</span></h2>
													<p><strong>Empresa: </strong>Locatel.</p>
													<p><strong>Responsabilidades: </strong> - Desarrollar sistemas informaticos, Soporte y mantenimiento de los equipos de compto de la empresa.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section>

			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Mi Trabajo</span>
							<h2 class="colorlib-heading animate-box">Algunos sistemas</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
						<div class="col-md-12">
							<p class="work-menu"><span><a href="#" class="active">Proyectos</a></span>
																	 <span><a href="#"></a></span>
																	 <span><a href="#"></a></span>
																	 <span><a href="#"></a></span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<a href="galery.php?id=1" target="_blank">
							<div class="project" style="background-image: url(images/img-1.jpg);">
								<div class="desc">
									<div class="con">
										<h3><!--<a href="work.html">-->Cotizador / CRM<!--</a>--></h3>
										<span>Aplicacion Web</span>
										<p class="icon">
											<!--<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										--></p>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<a href="galery.php?id=2" target="_blank">
							<div class="project" style="background-image: url(images/py.jpg);">
								<div class="desc">
									<div class="con">
										<h3>RaspBerry pi3</h3>
										<span>Python</span>
										<p class="icon">
											<!--<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>-->
										</p>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
							<a href="galery.php?id=3" target="_blank">
							<div class="project" style="background-image: url(images/elec.jpg);">
								<div class="desc">
									<div class="con">
										<h3>Elecciones</h3>
										<span>Elecciones</span>
										<p class="icon">
											<!--<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>-->
										</p>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
							<a href="galery.php?id=4" target="_blank">
							<div class="project" style="background-image: url(images/rutas.png);">
								<div class="desc">
									<div class="con">
										<h3>Rutas</h3>
										<span>Rutas</span>
										<p class="icon">
											<!--<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>-->
										</p>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<a href="galery.php?id=5" target="_blank">
							<div class="project" style="background-image: url(images/cal.png);">
								<div class="desc">
									<div class="con">
										<h3>CRM / Contable / Administrativo</h3>
										<span>CRM / Contable / Administrativo</span>
										<p class="icon"><!--
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>-->
										</p>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="project" style="background-image: url(images/otros.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Otros Proyectos</a></h3>
										<span>Otros Proyectos</span>
										<p class="icon">
											<!--<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>-->
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><!--<a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a>--></p>
						</div>
					</div>
				</div>
			</section>
			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Contactame</span>
							<h2 class="colorlib-heading">Contacto</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">pedroarrieta25@hotmail.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>Panamá</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">+507 6002-6773</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="" method="post">
										<div class="form-group">
											<input type="text" name="nombre" class="form-control" placeholder="Nombre">
										</div>
										<div class="form-group">
											<input type="text" name="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="text" name="asunto" class="form-control" placeholder="Asunto">
										</div>
										<div class="form-group">
											<textarea name="mensaje" id="message" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" name="mensaje" class="btn btn-primary btn-send-message" value="Enviar Mensage">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
