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
	<section id="sommaire" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 align="center">Plan</h2>
					<div>
						<ul>
							<li class="paragraphePlan"><a href="#objectif">Objectif</a></li>
							<li class="paragraphePlan"><a href="#infrastructure">L'infrastructure</a></li>
							<li class="paragraphePlan"><a href="#application">L'application OpenMind</a></li>
							<li class="paragraphePlan"><a href="#evolutions">Les possibilités d'évolutions</a></li>
							<li class="paragraphePlan"><a href="#conclusion">Conclusion</a></li>
						</ul>
					</div>  
				</div>
			</div>  
		</div>
	</section>  
    <section class="pfblock pfblock-gray" id="objectif"> 
			<div class="container">  
				<div class="row"> 
                    <div class="col-sm-12">  
                        <h2  align="center">Objectif</h2>
                        <div>
                       		<li class="paragrapheObjectif">
                       			Proposer une solution innovante et facile d'utilisation permettant d'aider l'étudiant(e) tout au long de sa scolarité.
                       		</li>
                       		<li class="paragrapheObjectif paragrapheMarge">
                       			Faciliter la vie scolaire, l'échange d'information, la relation professeur/étudiant.
                       		</li>
                       		<li class="paragrapheObjectif paragrapheMarge">
                       			Améliorer l'apprentissage et mettre la coopération et l'esprit d'équipe au centre de la pédagogie.
                       		</li>
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
					<div class="paragraphePlan" align="center">
                   		Technologies utilisées
                       	<div class="row">
                       		<div class="col-md-2"><img src="/img/apache.png" alt="Logo laravel"></div>
                       		<div class="col-md-2"><img src="/img/php.png" alt="Logo laravel"></div>
                       		<div class="col-md-2"><img src="/img/mysql.png" alt="Logo mysql"></div>
                       		<div class="col-md-2"><img src="/img/smtp.png" alt="Logo jquery"></div>
                       		<div class="col-md-2"><img src="/img/heartBeat.png" alt="Logo bootstrap"></div>
                       		<div class="col-md-2"><img src="/img/rsync.png" alt="Logo github"></div>
                       	</div>
                    </div> 
                    <div class="col-sm-12 col-md-12 imageMarge" align="center">
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
                        <div class="paragraphePlan" align="center">
                       		Technologies utilisées
	                       	<div class="row">
	                       		<div class="col-md-2 col-md-offset-1"><img src="/img/laravel.png" alt="Logo laravel"></div>
	                       		<div class="col-md-2"><img src="/img/mysql.png" alt="Logo mysql"></div>
	                       		<div class="col-md-2"><img src="/img/jquery.png" alt="Logo jquery"></div>
	                       		<div class="col-md-2"><img src="/img/bootstrap.png" alt="Logo bootstrap"></div>
	                       		<div class="col-md-2"><img src="/img/github.png" alt="Logo github"></div>
	                       	</div>
	                       	<div class="imageMarge">
	                       	Présentation de l'application
	                       	</div>
	                       	<div class="row">
	                       		<div class="col-md-12">
	                       			<a href="/"><button>OpenMind</button></a>
	                       		</div>
	                       		
	                       	</div>
                        </div> 
                    </div>
                </div>
			</div> 
    </section>
    <section id="evolutions" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 align="center">Evolutions</h2>
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
@section('footer')

@endsection