//Date de début et date de fin
jQuery(function($){
	var datepickers = $('.datepicker').datepicker({
		minDate : 0,
		dateFormat: "yy-mm-dd",
		onSelect: function(date){
			var option = this.id == 'dateDebutEtape' ? 'minDate' : 'maxDate';
			datepickers.not('#'+this.id).datepicker('option',option,date);
		}
		
	})
});