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
			<div class="row presentation" style="height:950px">
				@section('corps') 
				
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
