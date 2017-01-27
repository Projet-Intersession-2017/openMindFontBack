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
	<section id="sommaire" class="pfblock paragrapheMarge">
		<div class="container">
			<div class="row">
				<h2 align="center" style="font-size: 35px; text-decoration: underline;">Plan</h2>
				<div class="col-sm-6">
					<div>
						<ul>
							<li class="paragraphePlan"><a href="#objectif">Objectif</a></li>
							<li class="paragraphePlan"><a href="#infrastructure">L'infrastructure</a></li>
							<li class="paragraphePlan"><a href="#application">L'application OpenMind</a></li>
							<li class="paragraphePlan"><a href="#evolutions">Les possibilités d'évolutions</a></li>
							<li class="paragraphePlan"><a href="#conclusion">Conclusion</a></li>
							<li class="paragraphePlan"><a href="/presentation/remerciements">Remerciements</a></li>
						</ul>
					</div>  
				</div>
				<div class="col-sm-6">
					<div>
						<ul>
							<li class="paragraphePlan"><a href="/presentation/reseau">Réseau</a></li>
							<li class="paragraphePlan"><a href="/presentation/front">Front</a></li>
							<li class="paragraphePlan"><a href="/presentation/back">Back</a></li>
							<li class="paragraphePlan"><a href="/presentation/projet">Projet</a></li>
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
                        <h2  align="center" style="font-size: 35px; text-decoration: underline;">Objectif</h2>
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
    <section id="projet" class="pfblock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 align="center" style="font-size: 35px; text-decoration: underline;">Gestion de Projet</h2>
					<div class="paragraphePlan" align="center">
                   		Outils utilisées
                       	<div class="row">
                       		<div class="col-md-2 col-md-offset-3"><img src="/img/drive.png" alt="Logo Google Drive"></div>
                       		<div class="col-md-2"><img src="/img/gantter.png" alt="Logo Gantter"></div>
                       		<div class="col-md-2"><img src="/img/excel.png" alt="Logo Excel"></div>
                    </div>
				</div>
			</div>  
		</div>
	</section> 
	<section id="infrastructure" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 align="center" style="font-size: 35px; text-decoration: underline;">Infrastructure</h2>
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
				</div>
			</div>  
		</div>
	</section>  
    <section class="pfblock pfblock" id="application"> 
			<div class="container">  
				<div class="row"> 
                    <div class="col-sm-12">  
                        <h2  align="center" style="font-size: 35px; text-decoration: underline;">L'application OpenMind</h2>
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
	                       			<a href="/" target="_bank"><button>OpenMind</button></a>
	                       		</div>
	                       	</div>
                        </div> 
                    </div>
                </div>
			</div> 
    </section>
    <section id="evolutions" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 align="center" style="font-size: 35px; text-decoration: underline;">Evolutions</h2>
					<div class="paragraphePlan">
                       	<li class="paragrapheEvolutions paragrapheMarge">
                   			Relevé des présences
                   		</li>
                   		<li class="paragrapheEvolutions paragrapheMarge">
                   			Emploi du temps/agenda partagé
                   		</li>
                   		<li class="paragrapheEvolutions paragrapheMarge">
                   			Mentoring
                   		</li>
                   		<li class="paragrapheEvolutions paragrapheMarge">
                   			Communication facilité via Skype
                   		</li>
                   		<li class="paragrapheEvolutions paragrapheMarge">
                   			Zone d'actualité (soirées étudiantes, informations générales, etc ... )
                   		</li>
                    </div> 
				</div>
			</div>  
		</div>
	</section>
	<section class="pfblock pfblock" id="conclusion"> 
			<div class="container">  
				<div class="row"> 
                    <div class="col-sm-12">  
                        <h2  align="center" style="font-size: 35px; text-decoration: underline;">Conclusion</h2>
                        <div class="paragraphePlan" style="text-align:center">
                       		L’application répond aux besoins du client. Concernant le questionnaire et le partage des cours avec les élèves, les futurs améliorations pour la version suivante seront un échange de messages instantanées entre les étudiants et les tuteurs lors d’un cours, la gestion des présence des élèves connectés. De plus, le partage avec écran blanc permettra une interactivité du cours.
                        </div> 
                    </div>
                </div>
			</div> 
    </section>   
@endsection
@section('footer')

@endsection