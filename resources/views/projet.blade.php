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
	<section id="projet" class="pfblock">
		<div class="container">
			
			<div class="row">
					<p style="text-align: center; font-size: 40px; text-decoration: underline; color: black">Gantt</p>
                    <div class="col-sm-12 col-md-12" align="center">
                    	<img src="/img/2.png" alt="">
                    </div>
			</div> 
			<br>
			<div class="row">
					<p style="text-align: center; font-size: 40px; text-decoration: underline; color: black">Gestion des risques</p>
                    <div class="col-sm-12 col-md-12" align="center">
                    	<img src="/img/3.PNG" alt="">
                    </div>
			</div> 
			<br>
			<div class="row">
					<p style="text-align: center; font-size: 40px; text-decoration: underline; color: black">Gestion du budget</p>
                    <div class="col-sm-12 col-md-12" align="center">
                    	<img src="/img/1.PNG" alt="">
                    </div>
			</div>  
		</div>
	</section>
@endsection
@section('footer')

@endsection