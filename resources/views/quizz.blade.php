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
        $('.question').hide();
        $('#tabs-1').show();
        $('.btnSuivant').click(function() {
            var tabAvant = $(this).closest('div').attr('id');
            var tabApres = $(this).closest('div').next().attr('id');
            $('#'+tabAvant).hide();
            $('#'+tabApres).show();
            var reponse =$(this).closest('div').children().eq(1).children().attr('class');
            if ($(this).closest('div').children().eq(1).children().attr('class')=='TypeCheckbox'){
                $('.TypeCheckbox').each(function() {
                    if ($(this).is(":checked"))
                        alert($(this).next().text())
                });
            }
        });
    });
</script>
<div class="row" class="blocContact">
    <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
           <div id="tabs"> 
              <div id="tabs-1" class="question">
                <p class="paragrapheQuestion">Question 1 </p>
                <button type="button" class="btn btn-primary btnSuivant">Suivant</button>
              </div>
              <div id="tabs-2" class="question">
                <p class="paragrapheQuestion">Question 2</p>
                <label class="paragrapheReponse"><input type="checkbox" class="TypeCheckbox"><span>blabla 1</span></label><br>
                 <label class="paragrapheReponse"><input type="checkbox" class="TypeCheckbox"><span>blabla 2</span></label><br>
                 <label class="paragrapheReponse"><input type="checkbox" class="TypeCheckbox"><span>blabla 3</span></label><br>
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