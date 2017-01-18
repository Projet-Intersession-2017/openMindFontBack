$( document ).ready(function() {
	$( ".supprimer" ).click(function() {
	 $(this).closest('tr').remove();
	});
});

function modalModifGroupe(obj){
	$('.modalGroupe').modal('show');
}
