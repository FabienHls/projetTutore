//Date de début et date de fin
jQuery(function($){
	var datepickers = $('.datepicker').datepicker({
		minDate : 0,
		onSelect: function(date){
			var option = this.id == 'dateDebutEtape' ? 'minDate' : 'maxDate';
			datepickers.not('#'+this.id).datepicker('option',option,date);
		}
		
	})
});

jQuery(function($){
	var timepickers = $('.timepicker').timepicker({
		minTime : 0,
		onSelect: function(time){
			var otpion = this.is == 'heureDepart' ? 'minTime' : 'maxTime';
			timepickers.not('#'+this.id).datepicker('option', option, time);
		}
	})
});

//Permet de mettre datepicker en français
/*
  $( "#dateDebutEtape,#dateFinEtape" ).datepicker({
altField: "#datepicker",
closeText: 'Fermer',
prevText: 'Précédent',
nextText: 'Suivant',
currentText: 'Aujourd\'hui',
monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
weekHeader: 'Sem.',
dateFormat: 'yy-mm-dd',
minDate : 0
});
*/
