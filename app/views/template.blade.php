<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
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
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <a href="#" >Se connecter</a>
			</div>
		  </div>
		</nav>
		<div class="row">
			<div class="col-sm-4 col-md-4">
				<div class="thumbnail">
					<h3 align="center">La plateforme</h3>
				  <img src="{{ asset('img/Platform.png') }}" alt="plateforme">
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
					<img src="..." alt="...">
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
					<img src="..." alt="...">
					<hr>
					<p>Un suivi personnalisé des utilisateurs</p>
				</div>
			</div>
		</div>
		<div class="row blocMentoring">
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
		<div class="row">
			<div class="col-sm-12 col-md-12">
			<h1 align="center">Il nous font confiance</h1>
			</div>
		</div>
    </body>
</html>
