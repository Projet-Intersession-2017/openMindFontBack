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
	<section id="back" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					  <div class="paragraphePlan" align="center">
	               		<p style="text-decoration: underline">Back : technologies utilisées</p>
	                   	<div class="row">
	                       	<div class="col-md-2 col-md-offset-1"><img src="/img/apache.png" alt="Logo laravel"></div>
	                       	<div class="col-md-2"><img src="/img/php.png" alt="Logo laravel"></div>
	                   		<div class="col-md-2"><img src="/img/laravel.png" alt="Logo laravel"></div>
	                   		<div class="col-md-2"><img src="/img/mysql.png" alt="Logo mysql"></div>
	                   		<div class="col-md-2"><img src="/img/github.png" alt="Logo github"></div>
	                   	</div>
                	</div> 
				</div>
			</div> 
			<div class="row">
				<div class="col-sm-12 col-md-12" style="color: black; font-size:30px">
					<ul><p style="text-decoration: underline; font-size:40px">Environnement</p>
					    <li><b>Php 7 :</b> + performance but stabilité</li>
					    <li><b>Apache2 :</b>   Mature et stable</li>
					    <li><b>MySql 5.7 :</b> Mature et stable</li>
					</ul>

					<ul><p style="text-decoration: underline; font-size:40px">Framework</p>
					    <li><b>Laravel 5.3 :</b> + rapide à prendre en main, framework d'avenir </li>   
					</ul>

					<ul><p style="text-decoration: underline; font-size:40px">Gestionnaire de version</p>
					    <li><b>GIT</b> avec Github</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('footer')

@endsection