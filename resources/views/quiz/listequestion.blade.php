@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-lg-12 titreQuiz">
	Quiz <?php echo $surveyName[0]->labelle ?>
</div>
@endsection

@section('content')
   <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
   	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    	var tabReponse = [];
    	var tabQuestion=[];
        $( document ).ready(function() {
            $('.question').hide();
            $('#tabs-1').show();
            $('.TypeCheckbox').prop("checked", false);
            $('.btnSuivant').click(function() {
                stockerReponse(this);
            });
            $('.btnTerminer').click(function() {
            	stockerReponse(this);
                $.ajax({
                    url : '/intra/candidat/'+<?php echo $candidatId ?>+'/examen/'+<?php echo $examenId ?>+'/survey/'+<?php echo $surveyId ?>+'/sendresults',
                    type : 'POST',
                    data : "tabQuestion=" + tabQuestion + "&tabReponse=" + tabReponse,
                    dataType : 'html',
                    success: function(data) {
                        alert(data); 
                    },
                    error: function() {
                        alert('La requête n\'a pas abouti'); 
                    }    
                });
            });
        });
        function stockerReponse(obj){
        	
            var tabAvant = $(obj).closest('div').attr('id');
            var idQuestionSplit = tabAvant.split('-');
            idQuestion=idQuestionSplit[1];
            var tabApres = $(obj).closest('div').next().attr('id');
            $('#'+tabAvant).hide();
            $('#'+tabApres).show();
            var reponseCheck = $(obj).closest('div').children().eq(1).attr('class');
			tabQuestion.push(idQuestion);
            if (reponseCheck=='TypeCheckbox'){
                var reponseC='';
                $('.TypeCheckbox').each(function() {
                    if ($(this).is(":checked")){
                        reponseC += $(this).next('span').text()+'||';
                    }
                });
                reponseC= reponseC.substring(0,reponseC.length-2);
                tabReponse.push(reponseC);
            }
            var reponseInput = $(obj).closest('div').find('.inputReponse').val();
            if (reponseInput!=undefined){
                reponseI=reponseInput;
                tabReponse.push(reponseI);
            }
            alert(tabQuestion)
            alert(tabReponse)
            $('.TypeCheckbox').prop("checked", false);
        }
    </script>





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
					    	echo '<button type="button" class="btn btn-primary btnTerminer">Terminer</button></div>';
					    		
					    ?> 
				      </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
