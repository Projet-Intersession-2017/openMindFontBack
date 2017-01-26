@extends('welcome')

@section('menu')

@parent

@endsection

@section('corps')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( document ).ready(function() {
        var reponseTotal = [];
        $('.question').hide();
        $('#tabs-1').show();
        $('.TypeCheckbox').prop("checked", false);
        $('.btnSuivant').click(function() {
            var reponse = [];
            var tabAvant = $(this).closest('div').attr('id');
            var idQuestionSplit = tabAvant.split('-');
            idQuestion=idQuestionSplit[1];
            var tabApres = $(this).closest('div').next().attr('id');
            $('#'+tabAvant).hide();
            $('#'+tabApres).show();
            var reponseCheck = $(this).closest('div').children().eq(1).attr('class');
            if (reponseCheck=='TypeCheckbox'){
                var reponseC='';
                $('.TypeCheckbox').each(function() {
                    if ($(this).is(":checked")){
                        reponseC += $(this).next('span').text()+'||';
                    }
                });
                reponseC= reponseC.substring(0,reponseC.length-2);
                reponse.push('Question ' + idQuestion +' Reponse '+ reponseC);
            }
            var reponseInput = $(this).closest('div').find('.inputReponse').val();
            if (reponseInput!=undefined){
                reponseI=reponseInput;
                reponse.push('Question ' + idQuestion +' Reponse '+ reponseI);
            }
            reponseTotal.push(reponse);
            alert(reponseTotal)
            $('.TypeCheckbox').prop("checked", false);
        });
    });
</script>
<div class="row" class="blocContact">
    <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
           <div id="tabs"> 
              <div id="tabs-1" class="question">
                <p class="paragrapheQuestion">Question 1 </p>
                <input type="text" class="inputReponse">
                <button type="button" class="btn btn-primary btnSuivant">Suivant</button>
              </div>
              <div id="tabs-2" class="question">
                <p class="paragrapheQuestion">Question 2</p>
                <input type="checkbox" class="TypeCheckbox"><span class="paragrapheReponse">blabla 1</span><br>
                <input type="checkbox" class="TypeCheckbox"><span class="paragrapheReponse">blabla 2</span><br>
                <input type="checkbox" class="TypeCheckbox"><span class="paragrapheReponse">blabla 3</span><br>
                <button type="button" class="btn btn-primary btnSuivant">Suivant</button>
              </div>
              <div id="tabs-3" class="question">
                <p class="paragrapheQuestion">Question 3</p>
                <button type="button" class="btn btn-primary btnSuivant">Terminer</button>
              </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('footer')
	@parent
	@endsection