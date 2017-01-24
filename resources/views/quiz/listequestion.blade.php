@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-lg-12 titreGestionUsers">
	Repondre au Quiz
</div>
@endsection

@section('content')
<div class="col-lg-12">
	<div class="row">
		<div class="row" class="blocContact">
			<div class="col-md-6 col-md-offset-3">
				<div class="well well-sm">
				   <div id="tabs"> 
					    <?php
					    	$reponses = array();
					    	$labelQuestion='';
					    	foreach ($questionsList as $key => $value){
					    		if ($labelQuestion!=$value->Intitule){
					    			 if ($labelQuestion!='')
					    			 	echo '<button type="button" class="btn btn-primary btnSuivant">Suivant</button></div>';
					    			 echo'<div id="tabs-'.$value->id.'" class="question">';
					    			 echo'<p class="paragrapheQuestion">'. $value->Intitule.'</p>';
					    			 $labelQuestion=$value->Intitule;
					    		} 
					    		if ($value->type_id=="1" && $labelQuestion==$value->Intitule ){
					    			echo'<input type="checkbox" class="TypeCheckbox"><span class="paragrapheReponse">'.$value->choix.'</span><br>';
					    			//array_push($reponses, $value->reponse);
					    		}else{
					    			 echo'<input type="text" class="inputReponse">';
					    		} 
					    	}
					    	echo '<button type="button" class="btn btn-primary btnSuivant">Terminer</button></div>';
					    		
					    ?> 
				      </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
