<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> 
        <!-- Fonts -->
        <link  rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap-theme.css"/>
        <link  rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.css"/>
     <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

        <link  rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/font-awesome.min.css"/>
        <link  rel="stylesheet" type="text/css" href="/css/accueil.css"/>
		<!-- Latest compiled and minified JavaScript -->
        <script src="/vendor/jquery/jquery.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>    </head>
    <body>
    @section('menu')
        <nav class="navbar navbar-default">
		  <div class="container-fluid">
		  	<div class="col-md-6" align="left">
			  <img src="/img/logo.png" alt='logo'  width="100px">
			</div>
			<div class="col-md-6" align="right">
			  <a href="contact" class="btn btn-primary" >Nous contacter</a>
			  <a href="intra/login" class="btn btn-primary" >Se connecter</a>
			   <a href="intra/register" class="btn btn-primary" >S'inscrire</a>
			</div>
		  </div>
		</nav>
	@show
		<div class="container-fluid">
		 @section('corps') 
			<div class="row">
				<div class="col-sm-12 col-md-12 presentation">
					<h1 align="center">OpenMind</h1>
					<div class="paragraphePresentation col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
						<p>
							Lorsque l'on suit des cours ou une formation, l'absence d'un espace de partage entre professeurs et étudiants peut se faire sentir afin de partager les connaissances plus facilement et progresser tous ensemble. 
						</p>
						<p>
							OpenMind est un outil innovant qui deviendra une aide indispensable pour vos études. Grâce à différents outils mis à votre disposition, OpenMind vous permettra de suivre et de réussir au mieu vos études en évoluant dans un espace d'aide, d'échanges et de convivialité.
						</p>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<h3 align="center">La plateforme</h3>
					  	<img src="/img/Platform.png" alt="plateforme">
					 	<hr>
						<p>Des mises en relation Mentor et
							Mentoré décuplées de manière
							qualitative via notre algorithme
						</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<h3 align="center">Les formations</h3>
						<img src="/img/Formation.png" alt="formation">
						<hr>
						<p>De courtes formations en
							présentiel et/ou des vidéos
							ludiques pour les utilisateurs
						</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<h3 align="center">Le suivi</h3>
						<img src="/img/Suivi.png" alt="suivi">
						<hr>
						<p>Un suivi personnalisé des utilisateurs</p>
					</div>
				</div>
			</div>
			<div class="row blocMentoring">
				<h2 class="paragrapheColor" align="center">Qu'est ce que le Mentoring? </h2>
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">PARTAGE</h4>
					<p class="paragrapheColor">Du partage d'expérience et de la transmission de savoir-être
					et/ou savoir-faire bénévoles entre deux individus</p>
				</div>
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">TRANSMISSION</h4>
					<p class="paragrapheColor">Le Mentoring traditionnel concerne un senior qui transmet
	à un plus junior</p>
				</div>
			</div>
			<div class="row blocMentoring">
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">Adaptability</h4>
					<p class="paragrapheColor">There are other possible methods: reverse Mentoring, when
	a junior mentors a senior and peer to peer mentoring</p>
				</div>
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">TRANSMISSION</h4>
					<p class="paragrapheColor">Le Mentoring traditionnel concerne un senior qui transmet
	à un plus junior</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
				<h1 align="center" class="titreConfiance">Ils nous font confiance</h1>
				</div>
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active" align="center">
			      <img src="/img/orange.png" alt="orange" width="250px">
			    </div>
			    <div class="item" align="center">
			      <img src="/img/danone.png" alt="danone" width="250px">
			    </div>
			    <div class="item" align="center">
			      <img src="/img/orange.png" alt="orange" width="250px">
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div> 
			<br/>
			<div class="row">
				<div class="col-sm-12 col-md-12" align="center">
					<div class="btn btn-primary">
		      			<i class="fa fa-facebook"></i>
		      		</div>
		      		<div class="btn btn-primary">
		      			<i class="fa fa-twitter"></i>
		      		</div>
		      		<div class="btn btn-primary">
		      			<i class="fa fa-linkedin "></i>
		      		</div>
				</div>
			</div>
			@show
		</div>
    </body>
</html>
