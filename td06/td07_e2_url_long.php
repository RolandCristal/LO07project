<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 2</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>
    <link href="my_css.css" rel="stylesheet" type="text/css"/>
    
  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <?php require 'nav.html'; ?> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Formulaire 2 avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : Transmission discrète de données</h5>

          <div class='mx-lg-3'> 

                <ul>
                    <li><a href="lo07_analyse_superglobales2.php?ville=troyes&effectif=3000">Troyes (Effectif : 3000)</a></li>
                    <li><a href="lo07_analyse_superglobales2.php?ville=paris&effectif=5000">Paris (Effectif : 5000)</a></li>
                    <li><a href="lo07_analyse_superglobales2.php?ville=lyon&effectif=4000">Lyon (Effectif : 4000)</a></li>
                </ul>
              
          </div>
        </div>
      </div>
    
      
      


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page d'Antoine Danguillaume rédigée 14/04/2025</small>
    <p/><hr/><p/>
  </body>
</html>