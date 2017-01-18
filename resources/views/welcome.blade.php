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
		<!-- Latest compiled and minified JavaScript -->
        <script src="/vendor/jquery/jquery.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
			h3{
				color:blue;
			}
			.blocMentoring{
				background-color : #50588a;
			}
			.paragrapheColor{
				color : white;
    			font-family: sans-serif;
			}
			p{
				color:black;
			}
			.carousel-inner{
				background-color: #f2f2f2;
				height: 300px;
			}
			.titreConfiance{
				color: grey;
				font-style : italic;
			}
			.logoSocial{
				background-color: blue;
				width: 50px;
				height: 50px;
				color:white;
			}

        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
		  <div class="container-fluid">
		  <div class="col-md-6" align="left">
			  <img src="/img/logo.png" alt='logo'  width="100px">
			</div>
			<div class="col-md-6" align="right">
			  <a href="#" class="btn btn-primary" >Se connecter</a>
			</div>
		  </div>
		</nav>
		<div class="container-fluid">
			<div class="col-sm-12 col-md-12">
			<h1 align="center">OpenMind</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			</div>
		</div>
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


    </body>
</html>
