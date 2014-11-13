<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">


   <title>Création étape</title>
   <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,700' rel='stylesheet'type='css'>
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
   </head>
   


  <body>

<?php 
include headerOrga.php;
?>



<!-- Début du formulaire -->
<div class="form-formulaireCompte">
    <h1><center> Création de l'étape </center></h1>
    <br><br>
   <div ng-app="sample">
    <form class="form-horizontal" name="registerForm">

        <div class="form-group" ng-class="{'has-error': registerForm.$dirty && registerForm.nomEtape.$invalid, 'has-success': registerForm.nomEtape.$valid}">
            <label class="control-label" for="nomEtape">Nom de l'étape</label>
            <i>(Champs obligatoire)</i>
                <input id="nomEtape" type="login" class="form-control" required name="nomEtape" ng-model="nomEtape" ng-minlength="1"/>
            <span class="text-danger" ng-show="registerForm.nomEtape.$error.minlength">
                    Le champs est obligatoire
                </span>
        </div>
 <!-- Type de l'étape -->
      <div class="form-group">
         <label for="text">Type de l'étape</label>
         <input type="tel" name="typeEtape" class="form-control" placeholder="Type">
      </div>

<!-- Date de début de l'étape -->
      <div class="form-group">
         <label for="">Date de début de l'étape</label>
         <input type="text" id="dateDebutEtape" class="datepicker" name="dateDebutEtape" placeholder="Date début">
      </div>
      <!-- Date de fin de l'étape -->
      <div class="form-group">
         <label for="">Date de fin de l'étape</label>
         <input type="text" id="dateFinEtape" class="datepicker" name="dateFinEtape" placeholder="Date fin">
      </div>
      <!-- Heure de départ -->
      <div class="form-group">
         <label for="text">Heure de départ</label>
         <input type="text" id="datetimepicker1" name="heureDepart" class="form-control" placeholder="Départ">
      </div>
      <!-- Heure de arrivée -->
      <div class="form-group">
         <label for="text">Heure d'arrivée</label>
         <input type="text" id="datetimepicker2" name="heureArrivee" class="form-control" placeholder="Arrivée">
      </div>
      <!-- Lieu étape -->
      <div class="form-group">
         <label for="">Lieu de départ</label>
         <input type="text" class="form-control" name="lieuDepart" placeholder="Départ">
      </div>
      <!-- Lieu début -->
      <div class="form-group">
         <label for="">Lieu d'arrivée</label>
         <input type="text" class="form-control" name="lieuArrivee" placeholder="Arrivée">
      </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
               <center> <input type="submit" class="btn btn-default" value="Créer compte" ng-disabled="registerForm.$invalid" /></center>
            </div>
        </div>

</form>
</div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/angular/angular.js"></script>
<script type="text/javascript" src="js/creationCompte.js"></script>
<script src="js/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="js/date.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
   $('#datetimepicker1,#datetimepicker2').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
   });
</script>



         
</html>