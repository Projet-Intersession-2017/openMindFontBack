@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-lg-12 titreListeSurvey">
	Liste des quiz pour l'examen <?php echo $examenName[0]->label ?>
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
	 	echo '<div class="col-md-4 BlocExam">';
	 	echo '<div style="opacity : 5;">';
	 	echo '<h2>'. $value->labelle .'</h2><br><a href="/intra/candidat/'.Auth::user()->id.'/examen/'. $value->examen_id .'/survey/'. $value->id .'"><button class="btn btn-primary" style="background-color: #c03b2b;">Commencer le quiz</button></a>';
	 	echo '<p>Description</p>';
	 	echo'</div>';
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
