<?php

// Condition du Mois pour prendre la valeur du Mois puis la réintégrer dans le titre
if ($_GET['selectedMonth']) {
     $getMonth = $_GET['selectedMonth'];
} else {
  $getMonth = date("n");  //Valeur par défault si la condition est fausse
};

// Condition du Year pour prendre la valeur du Mois puis la réintégrer dans le titre
if ($_GET['selectedYear']) {
     $getYear = $_GET['selectedYear'];
} else {
  $getYear = date("Y");  //Valeur par défault si la condition est fausse
};


var_dump($_GET);
$days =[
1 => 'Lundi',
'Mardi',
'Mercredi',
'Jeudi',
'Vendredi',
'Samedi',
'Dimanche'];

$months = [
  1 => 'Janvier',
  'Février',
  'Mars',
  'Avril',
  'Mai',
  'Juin',
  'Juillet',
  'Août',
  'Septembre',
  'Octobre',
  'Novembre',
  'Décembre'
];

 ?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calendrier</title>
  </head>
  <body>
    <h1 class="text-center">Calendrier</h1>
    <h2 class="text-center">un calendrier élégant en php</h2>
    <!-- Tableau pour Calendrier -->

        <!-- Mois + année -->

        <div class="container">
          <div class="row">
            <div class="col d-flex justify-content-center">
                <?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8') ?>
                <p><?= strftime("%B %Y")?>
                <?php  ?></p>
            </div>
          </div>

          <!-- Sélection moi année -->

          <div class="row">

            <div class="col d-flex justify-content-center">

              <form class="form-inline" method="get">

                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
                 <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="selectedMonth">

                   <option selected><?php echo strftime("%B"); ?></option>

                   <?php foreach ($months as $month => $value) :?>
                   <option value="<?= $month ?>"><?= $value?></option>
                   <?php endforeach;?>

                 </select>

                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
                 <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="selectedYear">

                   <option selected><?php echo strftime("%Y"); ?></option>
                   <?php for ($yearChoice=1960; $yearChoice<2061; $yearChoice++) :?>
                   <option value="<?= $yearChoice ?>"><?= $yearChoice?></option>
                   <?php endfor;?>

                 </select>

                <button type="submit" class="btn btn-primary my-1">Valider</button>

              </form>

            </div>

          </div>

          <!-- Jours -->

          <div class="row">

             <?php  foreach ($days as $day => $value) :?>
               <div class="col">
                 <p>
                    <?= $value?>
                 </p>
               </div>
             <?php endforeach;?>
            </div>

            <!-- Dates -->


          </div>
        </div>
  </body>
</html>
