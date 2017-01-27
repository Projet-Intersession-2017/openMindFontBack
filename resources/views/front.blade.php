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
	<section id="front" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="paragraphePlan" align="center" >
	               		<p style="text-decoration: underline">Front : technologies utilisées</p>
	                   	<div class="row">
	                       	<div class="col-md-2 col-md-offset-3"><img src="/img/bootstrap.png" alt="Logo bootstrap" width="200px;"></div>
	                       	<div class="col-md-2"><img src="/img/javascript.png" alt="Logo javascript" width="200px"></div>
	                   		<div class="col-md-2"><img src="/img/jquery.png" alt="Logo jquery" width="200px"></div>
	                   	</div>
                	</div>
                </div>
            </div>
            <div class="row">
				<div class="col-sm-12 col-md-12" style="color: black; font-size:30px">
					<ul><p style="text-decoration: underline; font-size:40px">Bootstrap</p>
					    <li>Rapide à prendre en main</li>
					    <li>Responsive</li>
					</ul>

					<ul><p style="text-decoration: underline; font-size:40px">Javascript / JQuery</p>
					    <li>Permet d’avoir un côté dynamique des pages sans recharger la page</li>
					    <li>Rapide à prendre en main et facile d'utilisation</li>
					</ul>

					<ul><p style="text-decoration: underline; font-size:40px">Blade</p>
					    <li>Le moteur de templating fourni avec Laravel</li>
					    <li>Gestion facile des templates</li>
					    <li>Utilisation de vues personnelles facile</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('footer')

@endsection