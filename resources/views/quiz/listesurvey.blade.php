@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-lg-12 titreGestionUsers">
	Liste des survey
</div>
@endsection
<link rel="stylesheet" type="text/css" href="/css/quiz.css">
@section('content')
<div class="col-lg-12"> 
	<?php
	$i=0;
	 foreach ($surveyList as $key => $value) {
	 	if ($i==0){
	 		echo '<div class="row">';
	 	}
	 	echo '<div class="col-md-4">';
	 	echo '<a href="/intra/examen/'. $value->examen_id .'/survey/'. $value->id .'"><button class="btn btn-primary">'.$value->labelle.'</button></a>';
	 	echo'</div>';
	 	$i++;
	 	if ($i==3){
	 		echo '</div></br>';
	 		$i=0;
	 	}
	 }

	?>
</div>
@endsection
