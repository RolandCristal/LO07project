<?php
require 'lo07_biblio_formulaire.php';
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LO07 2023 TD02 : bootstrap 5.3</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

  </head>
  <body>
    <div class="container">

      <h1>Introduction à Bootstrap 5.3</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
      crossorigin="anonymous"></script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <?php include 'nav.html' ?>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3: Persistance d'un Cursus ?</h5>
          
          <?php
          form_begin("mt-3", "get", "cursus_action1.php");
          form_input_text("Sigle", "sigle", 30, 'LO07');
          form_input_text("Label", "label", 30, "Web");
          form_select("Catégorie", "categorie", "", 5, array("CS", "TM", "EC", "ME", "CT"));
          form_input_text("Effectif", "effectif", 30, "87");
          form_input_submit("Submit");
          form_input_reset("Reset");
          form_end();
          ?>       

        </div>
      </div>


    </div>

  <p/><hr/><p/>
  <small>Page d'Antoine Danguillaume rédigée le 23/04/2025</small>
  <p/><hr/><p/>    

</body>
</html>
