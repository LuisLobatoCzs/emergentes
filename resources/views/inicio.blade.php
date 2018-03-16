@extends('layouts.app')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <title>Tu profe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
			body,html{width:100%;height:100%}
			body{font-family:Merriweather,'Helvetica Neue',Arial,sans-serif}
			hr{max-width:50px;border-width:3px;border-color:#f05f40}
			hr.light{border-color:#fff}
			a{color:#f05f40;-webkit-transition:all .2s;-moz-transition:all .2s;transition:all .2s}
			a:hover{color:#f05f40}
			h1,h2,h3,h4,h5,h6{font-family:'Open Sans','Helvetica Neue',Arial,sans-serif}
			.bg-primary{background-color:#f05f40!important}
			.bg-dark{background-color:#212529!important}
			.text-faded{color:rgba(255,255,255,.7)}
			section{padding:8rem 0}
			.section-heading{margin-top:0}::-moz-selection{color:#fff;background:#212529;text-shadow:none}::selection{color:#fff;background:#212529;text-shadow:none}img::selection{color:#fff;background:0 0}img::-moz-selection{color:#fff;background:0 0}#mainNav{border-bottom:1px solid rgba(33,37,41,.1);background-color:#fff;font-family:'Open Sans','Helvetica Neue',Arial,sans-serif;-webkit-transition:all .2s;-moz-transition:all .2s;transition:all .2s}
			#mainNav .navbar-brand{font-weight:700;text-transform:uppercase;color:#f05f40;font-family:'Open Sans','Helvetica Neue',Arial,sans-serif}
			#mainNav .navbar-brand:focus,#mainNav .navbar-brand:hover{color:#f05f40}#mainNav .navbar-nav>li.nav-item>a.nav-link,#mainNav .navbar-nav>li.nav-item>a.nav-link:focus{font-size:.9rem;font-weight:700;text-transform:uppercase;color:#212529}#mainNav .navbar-nav>li.nav-item>a.nav-link:focus:hover,#mainNav .navbar-nav>li.nav-item>a.nav-link:hover{color:#f05f40}#mainNav .navbar-nav>li.nav-item>a.nav-link.active,#mainNav .navbar-nav>li.nav-item>a.nav-link:focus.active{color:#f05f40!important;background-color:transparent}#mainNav .navbar-nav>li.nav-item>a.nav-link.active:hover,#mainNav .navbar-nav>li.nav-item>a.nav-link:focus.active:hover{background-color:transparent}@media (min-width:992px){#mainNav{border-color:transparent;background-color:transparent}#mainNav .navbar-brand{color:rgba(255,255,255,.7)}#mainNav .navbar-brand:focus,#mainNav .navbar-brand:hover{color:#fff}#mainNav .navbar-nav>li.nav-item>a.nav-link{padding:.5rem 1rem}#mainNav .navbar-nav>li.nav-item>a.nav-link,#mainNav .navbar-nav>li.nav-item>a.nav-link:focus{color:rgba(255,255,255,.7)}#mainNav .navbar-nav>li.nav-item>a.nav-link:focus:hover,#mainNav .navbar-nav>li.nav-item>a.nav-link:hover{color:#fff}#mainNav.navbar-shrink{border-bottom:1px solid rgba(33,37,41,.1);background-color:#fff}#mainNav.navbar-shrink .navbar-brand{color:#f05f40}#mainNav.navbar-shrink .navbar-brand:focus,#mainNav.navbar-shrink .navbar-brand:hover{color:#f05f40}#mainNav.navbar-shrink .navbar-nav>li.nav-item>a.nav-link,#mainNav.navbar-shrink .navbar-nav>li.nav-item>a.nav-link:focus{color:#212529}#mainNav.navbar-shrink .navbar-nav>li.nav-item>a.nav-link:focus:hover,#mainNav.navbar-shrink .navbar-nav>li.nav-item>a.nav-link:hover{color:#f05f40}}header.masthead{padding-top:10rem;padding-bottom:calc(10rem - 56px);background-image:url(../img/header.jpg);background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}header.masthead hr{margin-top:30px;margin-bottom:30px}header.masthead h1{font-size:2rem}header.masthead p{font-weight:300}@media (min-width:768px){header.masthead p{font-size:1.15rem}}@media (min-width:992px){header.masthead{height:100vh;min-height:650px;padding-top:0;padding-bottom:0}header.masthead h1{font-size:3rem}}@media (min-width:1200px){header.masthead h1{font-size:4rem}}.service-box{max-width:400px}.portfolio-box{position:relative;display:block;max-width:650px;margin:0 auto}.portfolio-box .portfolio-box-caption{position:absolute;bottom:0;display:block;width:100%;height:100%;text-align:center;opacity:0;color:#fff;background:rgba(240,95,64,.9);-webkit-transition:all .2s;-moz-transition:all .2s;transition:all .2s}.portfolio-box .portfolio-box-caption .portfolio-box-caption-content{position:absolute;top:50%;width:100%;transform:translateY(-50%);text-align:center}.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-category,.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-name{padding:0 15px;font-family:'Open Sans','Helvetica Neue',Arial,sans-serif}.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-category{font-size:14px;font-weight:600;text-transform:uppercase}.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-name{font-size:18px}.portfolio-box:hover .portfolio-box-caption{opacity:1}.portfolio-box:focus{outline:0}@media (min-width:768px){.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-category{font-size:16px}.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-name{font-size:22px}}.text-primary{color:#f05f40!important}.btn{font-weight:700;text-transform:uppercase;border:none;border-radius:300px;font-family:'Open Sans','Helvetica Neue',Arial,sans-serif}.btn-xl{padding:1rem 2rem}.btn-primary{background-color:#f05f40;border-color:#f05f40}.btn-primary:active,.btn-primary:focus,.btn-primary:hover{color:#fff;background-color:#ee4b28!important}.btn-primary:active,.btn-primary:focus{box-shadow:0 0 0 .2rem rgba(240,95,64,.5)!important}
        </style>
    </head>
    @section('content')
	<body>		
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		  <div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">Tu Profe</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item">
				  <a class="nav-link js-scroll-trigger" href="#about">Nosotros</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
				</li>
				<li class="fa fa-2x fas fa-user text-primary mb-1 sr-icons">
			   
				</li>
				<li class="nav-item">
				  <a class="nav-link js-scroll-trigger" href="#contact">Iniciar Sesión</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>

		<header class="masthead text-center text-white d-flex">
		  <div class="container my-auto">
			<div class="row">
			  <div class="col-lg-10 mx-auto">
				<h1 class="text-uppercase">
				  <strong>Visualiza la Información de tu profesor Favorito </strong>
				</h1>
				<hr>
			  </div>
			  <div class="col-lg-8 mx-auto">
				<p class="text-faded mb-5">Si tienes duda y no sabes con quien tomar clases dentro de la FFC informate!</p>
				<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Adelante</a>
			  </div>
			</div>
		  </div>
		</header>

		<section class="bg-primary" id="about">
		  <div class="container">
			<div class="row">
			  <div class="col-lg-8 mx-auto text-center">
				<h2 class="section-heading text-white">Información que ayuda</h2>
				<hr class="light my-4">
				<p class="text-faded mb-4">Esta pagina web se decidío crear con el objetivo, que los alumnos se informarán de los cursos que se imparten en la FFC-BUAP .</p>
				<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Siguiente</a>
			  </div>
			</div>
		  </div>
		</section>

		<section id="services">
		  <div class="container">
			<div class="row">
			  <div class="col-lg-12 text-center">
				<h2 class="section-heading">Ofrecemos</h2>
				<hr class="my-4">
			  </div>
			</div>
		  </div>
		  <div class="container">
			<div class="row">
			  <div class="col-lg-3 col-md-6 text-center">
				<div class="service-box mt-5 mx-auto">
				  <i class="fa fa-4x far fa-address-book text-primary mb-3 sr-icons"></i>
				  <h3 class="mb-3">Horarios</h3>
				  <p class="text-muted mb-0">se mostrará los horarios en donde se visualizaran los disponibles.</p>
				</div>
			  </div>
			  <div class="col-lg-3 col-md-6 text-center">
				<div class="service-box mt-5 mx-auto">
				  <i class="fa fa-4x far fa-address-book text-primary mb-3 sr-icons"></i>
				  <h3 class="mb-3">Profesores con mejores puntuajes</h3>
				  <p class="text-muted mb-0">Por que el proposito es que tu tengas una buena preparación te mostramos a los mejores profesores</p>
				</div>
			  </div>
			  <div class="col-lg-3 col-md-6 text-center">
				<div class="service-box mt-5 mx-auto">
				  <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
				  <h3 class="mb-3">Ingresa tu Profesor(a)</h3>
				  <p class="text-muted mb-0">si no encuetras a tu profesor(a) que esperaras para ingresarla.</p>
				</div>
			  </div>
			  <div class="col-lg-3 col-md-6 text-center">
				<div class="service-box mt-5 mx-auto">
				  <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
				  <h3 class="mb-3">Entera te de todo</h3>
				  <p class="text-muted mb-0">sigue de cerca a tu Maestro(a)</p>
				</div>
			  </div>
			</div>
		  </div>
		</section>

		<section class="p-0" id="portfolio">
		  <div class="container-fluid p-0">
			<div class="row no-gutters popup-gallery">
			  <div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
				  <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
				  <div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
					  <div class="project-category text-faded">
						Profesor
					  </div>
					  <div class="project-name">
						Abrahm Jr
					  </div>
					</div>
				  </div>
				</a>
			  </div>
			  <div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
				  <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
				  <div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
					  <div class="project-category text-faded">
						Profesor
					  </div>
					  <div class="project-name">
						Observa
					  </div>
					</div>
				  </div>
				</a>
			  </div>
			  <div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
				  <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
				  <div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
					  <div class="project-category text-faded">
						Profesor
					  </div>
					  <div class="project-name">
						Galería
					  </div>
					</div>
				  </div>
				</a>
			  </div>
			  <div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
				  <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
				  <div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
					  <div class="project-category text-faded">
						Profesor
					  </div>
					  <div class="project-name">
						Anzures
					  </div>
					</div>
				  </div>
				</a>
			  </div>
			  <div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
				  <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
				  <div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
					  <div class="project-category text-faded">
						Category
					  </div>
					  <div class="project-name">
						Project Name
					  </div>
					</div>
				  </div>
				</a>
			  </div>
			  <div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
				  <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
				  <div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
					  <div class="project-category text-faded">
						Category
					  </div>
					  <div class="project-name">
						Project Name
					  </div>
					</div>
				  </div>
				</a>
			  </div>
			</div>
		  </div>
		</section>

	  

		<section id="contact">
		  <div class="container">
			<div class="row">
			  <div class="col-lg-8 mx-auto text-center">
				<h2 class="section-heading">Contacto</h2>
				<hr class="my-4">
				<p class="mb-5">Mantente informado de nosotros</p>
			  </div>
			</div>
			<div class="row">
			  <div class="col-lg-4 ml-auto text-center">
				<i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
				<p>123-456-6789</p>
			  </div>
			  <div class="col-lg-4 mr-auto text-center">
				<i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
				<p>
				  <a href="mailto:your-email@your-domain.com">tu_profe@gmail.com</a>
				</p>
			  </div>
			</div>
		  </div>
		</section>
    </body>
	@endsection
</html>
