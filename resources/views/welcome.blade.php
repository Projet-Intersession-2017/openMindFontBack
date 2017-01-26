<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> 
        @section('css')
	        <!-- Fonts -->
	        <link  rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap-theme.css"/>
	        <link  rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.css"/>
	     <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

	        <link  rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/font-awesome.min.css"/>
	        <link  rel="stylesheet" type="text/css" href="/css/accueil.css"/>
        @show
		<!-- Latest compiled and minified JavaScript -->
		@section('js')
	        <script src="/vendor/jquery/jquery.js"></script>
			<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
		@show 

	</head>
    <body>
		<div class="container-fluid">
			<div class="row presentation">
				 @section('menu')
				  <div class="row">
				  	<div class="col-md-7 blocLogo" align="right">
						  	<a href="/" ><img src="/img/logo20.png" alt='logo' width="350px"></a>
					</div>
					<div class="col-md-5" >
					    <ul class="nav navbar-nav blocMenu">
					        <li><a href="contact" class="champsMenu" >Nous contacter</a></li>
					        <li><a href="intra/login" class="champsMenu" >Se connecter</a></li>
				            <!--<li><a href="intra/register" class="champsMenu">S'inscrire</a></li>-->
				          </ul>
					</div>
				</div><br>
				@show
				@section('corps') 
				<div class="row">
					<div class="paragraphePresentation col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
						<p>
							Lorsque l'on suit des cours ou une formation, l'absence d'un espace de partage entre professeurs et étudiants peut se faire sentir afin de partager les connaissances plus facilement et progresser tous ensemble. 
						</p>
						<p>
							OpenMind est un outil innovant qui deviendra une aide indispensable pour vos études. Grâce à différents outils mis à votre disposition, OpenMind vous permettra de suivre et de réussir au mieux vos études en évoluant dans un espace d'aide, d'échanges et de convivialité.
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
						<p align="center">
						Une plateforme intuitive et facile d'accès pour un meilleur confort d'utilisation.
						</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<h3 align="center">Les cours</h3>
						<img src="/img/Formation.png" alt="formation">
						<hr>
						<p align="center">De grandes variétés de cours validés à l'aide d'examens thématiques.
						</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<h3 align="center">Le suivi</h3>
						<img src="/img/Suivi.png" alt="suivi">
						<hr>
						<p align="center">Un suivi personnalisé pour les étudiants, avec des professeurs facilement accessibles.</p>
					</div>
				</div>
			</div>
			<div class="row blocMentoring">
				<h2 class="paragrapheColor" align="center">Qu'est ce que l'e-learning? </h2>
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">PARTAGE</h4>
					<p class="paragrapheColor">Du partage d'expérience et de la transmission de savoir-être
					et/ou savoir-faire entre professeurs et étudiants</p>
				</div>
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">ACCESSIBILITE</h4>
					<p class="paragrapheColor">L'e-learning peut faciliter l'accès à la connaissance. Un ordinateur équipé d'une connexion à Internet suffit.</p>
				</div>
			</div>
			<div class="row blocMentoring">
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">APPRENTISSAGE</h4>
					<p class="paragrapheColor">Des documents et des références facilement accessibles pour renforcer et étoffer les connaissances vues en cours.</p>
				</div>
				<div class="col-sm-6 col-md-6">
					<h4 class="paragrapheColor">COMPLEMENTARITE</h4>
					<p class="paragrapheColor">Un parfait complément pour réussir dans la vie scolaire.</p>
				</div>
			</div> 
			@show
			@section('footer')
			<div class="row">
				<div class="col-sm-12 col-md-12">
				<h1 align="center" class="titreConfiance">Ils nous font confiance</h1>
				</div>
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <!--<ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>-->
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active" align="center">
			      <img src="/img/itAkademy.png" alt="itAkademy" width="200px">
			    </div>
			    <div class="item" align="center">
			      <img src="/img/danone.png" alt="danone" width="200px">
			    </div>
			    <div class="item" align="center">
			      <img src="/img/orange.png" alt="orange" width="200px">
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
