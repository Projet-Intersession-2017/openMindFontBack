@extends('welcome')

@section('menu')

@endsection


@section('css')
	@parent
	<link href="/vendor/bootstrap/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="/vendor/bootstrap/css/animate.css" rel="stylesheet">
	<link href="/css/presentation.css" rel="stylesheet" media="screen">
@endsection
@section('js')
	@parent
	<script src="/vendor/modernizr.custom.js"></script>
	<script src="/vendor/jquery/jquery.parallax-1.1.3.js"></script>
	<script src="/vendor/imagesloaded.pkgd.js"></script>
	<script src="/vendor/jquery/jquery.sticky.js"></script>
	<script src="/vendor/smoothscroll.js"></script>
	<script src="/vendor/wow.min.js"></script>
	<script src="/vendor/jquery/jquery.easypiechart.js"></script>
	<script src="/vendor/waypoints.min.js"></script>
	<script src="/vendor/jquery/jquery.cbpQTRotator.js"></script>
@endsection
    
@section('corps')
	<section id="PresentationAccueil" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<img src="/img/logo20.png" alt="OpenMind-logo"/>
				</div>
				<div class="col-sm-12 margeDiv">
					<h1 class="presentationEntete">La solution innovante de e-learning</h1> 
				</div>
			</div>
		</div>
	</section>
	<section id="infrastructure" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 align="center">Infrastructure</h2>
					<div class="paragraphePlan" align="center">
                   		<p style="text-decoration: underline">Technologies utilisées</p>
                       	<div class="row">
                       		<div class="col-md-2"><img src="/img/apache.png" alt="Logo laravel"></div>
                       		<div class="col-md-2"><img src="/img/php.png" alt="Logo laravel"></div>
                       		<div class="col-md-2"><img src="/img/mysql.png" alt="Logo mysql"></div>
                       		<div class="col-md-2"><img src="/img/smtp.png" alt="Logo jquery"></div>
                       		<div class="col-md-2"><img src="/img/heartBeat.png" alt="Logo bootstrap"></div>
                       		<div class="col-md-2"><img src="/img/rsync.png" alt="Logo github"></div>
                       	</div>
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 imageMarge" align="center">
                	<img src="/img/Infrastructure.PNG" alt="Infrastructure">
                </div>
				<div class="col-sm-6 col-md-6">
				<br>
                   <p style="color:black;font-size: 20px;"> - 2 serveurs web (Apache2 /Mysql) :<br> Contiennent les applications. Ils sont en

					synchronisation (toutes les cinq minutes) avec Rsync, et en cluster Haute

					Disponibilité grâce à Heartbeat : si l'un des serveur tombe, l'autre prend le relais

					sans coupure (une adresse IP virtuelle est créé à l'installation pour le cluster)</p> 

					<p style="color:black;font-size: 20px;">– 2 serveurs de base de données (Mysql) :<br> Contiennent les bases de données. Ils

					sont en réplication en temps réel (avec l'outil de réplication de Mysql), et en Haute

					disponibilité avec Heartbeat</p> 

					<p style="color:black;font-size: 20px;">– 1 serveur d'envoi de mails/ proxy-cache (Ssmtp et Varnish) :<br> Contient le serveur

					mail et le serveur de cache, pour accélérer le temps de mise à disposition des

					pages web. Varnish à été couplé avec Nginx (en mode proxy) pour des raisons

					d'incompatibilité avec AWS d'amazone, ce qui résoud quelques problèmes</p> 
				</div>
			</div>  
		</div>
	</section>
@endsection
@section('footer')

@endsection