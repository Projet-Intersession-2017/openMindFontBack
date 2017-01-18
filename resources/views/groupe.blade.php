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
 		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="/js/groupe.js"></script>

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
			<div class="col-sm-12 col-md-12">
				<h2>Liste des groupes</h2>
				<button class="btn btn-primary creer" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button><br>
				<table class="table">
				<tr>
					<th>Nom du groupe</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
				<tr>
					<td>Goupe 1</td>
					<td><button class="btn btn-primary modifier" onclick="modalModifGroupe(this)" >Modifier</button></td>
					<td><button class="btn btn-primary supprimer" >Supprimer</button></td>
				</tr>
				<tr>
					<td>Goupe 2</td>
					<td><button class="btn btn-primary modifier" onclick="modalModifGroupe(this)" >Modifier</button></td>
					<td><button class="btn btn-primary supprimer" >Supprimer</button></td>
				</tr>
				<tr>
					<td>Goupe 3</td>
					<td><button class="btn btn-primary modifier" onclick="modalModifGroupe(this)" >Modifier</button></td>
					<td><button class="btn btn-primary supprimer" >Supprimer</button></td>
				</tr>
				</table>
			</div>
		</div>
		<div class="modal fade modalGroupe">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title">Groupe</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<label>Nom du groupe : </label>
				<input type="text" id="nomGroupe" />
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
				<button type="button" class="btn btn-primary">Valider</button>
			  </div>
			</div>
		  </div>
		</div>
    </body>
</html>
