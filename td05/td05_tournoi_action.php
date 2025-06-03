<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TODO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css" />

</head>

<body>
  <div class="container">
    <h1>TD</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- ================================================================================================================ -->
    <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
    <!-- ================================================================================================================ -->

    <nav class="navbar navbar-expand-lg bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Antoine Danguillaume</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="???">Exercice 1</a></li>

            <!-- ===== Documentation ===== -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Ajouter vos sites personnels de documentation (>3)</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- ================================================================================================================ -->
    <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->

    <div class="mt-4 p-5 bg-primary text-white rounded">
      <h1>Introduction à PHP</h1>
      <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
    </div>

    <!-- ================================================================================================================ -->
    <!-- ===== Exercice 2 ===== -->
    <!-- ================================================================================================================ -->

    <p />
    <hr />
    <a id='exercice1' />
    <div class="card">
      <div class="card-body bg-info">
        <h5 class="card-title">Exercice 3 : Constitution d’équipes de joueurs pour le tournoi LO07</h5>
        <div class='mx-lg-3'>
          <?php
          echo
          '<table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <th>Valeur(s)</th>
                                    </tr>';
          $index = 0;
          foreach ($_GET as $key => $value) {
            $index += 1;
            if (is_array($value)) {
              $ut = implode('; ', $value);
              echo '<tr><td>' . $key . '</td><td>' . implode('; ', $value) . '</td></tr>';
            } else {
              echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
            }
          }
          echo '</table>';
          ?>
        </div>
      </div>
    </div>
  </div>


  <!-- ============================================================================================================= -->
  <p />
  <hr />
  <p />
  <small>Page d'Antoine Danguillaume rédigée le 02/04/2025</small>
  <p />
  <hr />
  <p />
</body>

</html>