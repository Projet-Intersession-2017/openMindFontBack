@extends('merci')

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
	<section id="PresentationMerci" class="pfblock PresentationMerci" style="height:100%">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<img src="/img/logo20.png" alt="OpenMind-logo"/>
				</div>
				<div class="col-sm-12 margeDiv">
					<h1 align="center" style="text-decoration: underline; color: white">Remerciements</h1>
				</div>
				<div class="col-sm-12 margeDiv" style="font-size: 22px; text-align:center">
				Je remercie dans un premier temps, toute l’équipe:<br>

				de développeurs : CLAIRET Jonathan, SOLEILHAVOUP Antoine, Cellier FLORIAN, Guillaume Stéphane<br><br>

				de réseaux : Juan PERROY<br>

				de leur participation et leurs investissements pour réaliser ce projet.<br>

				La team remercie aussi le chef de projet de sa participation, et son suivi de projet.<br><br>

				merci de votre écoute.
				</div>

			</div>
		</div>
	</section>

@endsection
@section('footer')

@endsection