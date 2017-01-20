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
	<header class="header"> 
		<nav class="navbar navbar-custom" role="navigation"> 
			<div class="container"> 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Works</a></li>
                        <li><a href="#skills">Skills</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div> 
			</div>  
		</nav> 
	</header> 
	<section id="PresentationAccueil" class="pfblock pfblock-gray">
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
	<section id="sommaire" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 align="center">Plan</h2>
					<div>
						<ul>
							<li class="paragraphePlan">Introduction</li>
							<li class="paragraphePlan">L'infrastructure</li>
							<li class="paragraphePlan">L'application OpenMind</li>
							<li class="paragraphePlan">Les possibilités d'évolution</li>
							<li class="paragraphePlan">Conclusion</li>
						</ul>
					</div>  
				</div>
			</div>  
		</div>
	</section>  
    <section class="pfblock pfblock-gray" id="introduction"> 
			<div class="container">  
				<div class="row"> 
                    <div class="col-sm-12">  
                        <h2  align="center">Introduction</h2>
                        <div class="paragraphePlan">
                       	
                        </div> 
                    </div>
                </div>
			</div> 
    </section>
	<section id="infrastructure" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 align="center">Infrastructure</h2>
					<div class="paragraphePlan">
                       	
                    </div> 
                    <div class="col-sm-12 col-md-12" align="center">
                    	<img src="/img/Infrastructure.PNG" alt="Infrastructure">
                    </div>
				</div>
			</div>  
		</div>
	</section>  
    <section class="pfblock pfblock-gray" id="application"> 
			<div class="container">  
				<div class="row"> 
                    <div class="col-sm-12">  
                        <h2  align="center">L'application OpenMind</h2>
                        <div class="paragraphePlan">
                       	
                        </div> 
                    </div>
                </div>
			</div> 
    </section>
    <section id="evolution" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 align="center">Evolution</h2>
					<div class="paragraphePlan">
                       	
                    </div> 
				</div>
			</div>  
		</div>
	</section>
	<section class="pfblock pfblock-gray" id="conclusion"> 
			<div class="container">  
				<div class="row"> 
                    <div class="col-sm-12">  
                        <h2  align="center">Conclusion</h2>
                        <div class="paragraphePlan">
                       	
                        </div> 
                    </div>
                </div>
			</div> 
    </section>   
@endsection