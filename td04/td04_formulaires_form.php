<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

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

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Antoine Danguillaume</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="???">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="???">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="???">Exercice 3</a></li>

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
        <h1>TD04: Formulaire PHP avec Bootstrap 5</h1>
        <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : formulaire de login et méthode GET</h5>

          <div class='mx-lg-3'> 
            <form method="get" action="lo07_analyse_formulaire1.php">
              <p>
                <label for="1login">Login</label><br>
                <input id="1login" name="login" type="text">
              </p>
              <p>
                <label for="1password">Entrez votre mot de passe</label><br>
                <input id="1password" name="password" type="password">
              </p>
              <p>
                <input type="submit" value="Submit" class="button bg-success">
                <input type="reset" value="Reset" class="button bg-danger">
              </p>
            </form>
          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : formulaire du login et méthode POST</h6>
            <div class='mx-lg-3'> 
            <form method="post" action="lo07_analyse_formulaire1.php">
              <p>
                <label for="2login">Login</label><br>
                <input id="2login" name="login" type="text">
              </p>
              <p>
                <label for="2password">Entrez votre mot de passe</label><br>
                <input id="2password" name="password" type="password">
              </p>
              <p>
                <input type="submit" value="Submit" class="button bg-success">
                <input type="reset" value="Reset" class="button bg-danger">
              </p>
            </form>
                     

            </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : Sondage UT</h6>
            <div class='mx-lg-3'> 
              <form method="post" action="lo07_analyse_formulaire1.php">
                <p>
                  <label for="3nom">Nom</label><br>
                  <input id="3nom" name="nom" type="text">
                </p>
                <p>
                  <label for="3prenom">Prénom</label><br>
                  <input id="3prenom" name="prenom" type="text">
                </p>
                <p>
                  <label for="3genre">Sélectionnez votre genre</label><br>
                  <label for="3homme">Homme<input type="radio" name="genre" value="Homme"></label>
                  <label for="3femme">Femme<input type="radio" name="genre" value="Femme"></label>
                </p>
                <p>
                  <label for="3statut">Sélectionnez votre statut</label><br>
                  <div class="btn-group">
                    <input type="radio" class="btn-check" name="statut" value="Etudiant" id="Etudiant" checked>
                    <label class="btn btn-outline-primary" for="Etudiant">Etudiant</label>

                    <input type="radio" class="btn-check" name="statut" value="Doctorant" id="Doctorant">
                    <label class="btn btn-outline-primary" for="Doctorant">Doctorant</label>

                    <input type="radio" class="btn-check" name="statut" value="Administratif" id="Administratif">
                    <label class="btn btn-outline-primary" for="Administratif">Administratif</label>

                    <input type="radio" class="btn-check" name="statut" value="Enseignant" id="Enseignant">
                    <label class="btn btn-outline-primary" for="Enseignant">Enseignant</label>
                  </div>
                </p>
                <p>
                  <label for="3vehicule">Sélectionnez un véhicule</label><br>
                  <select name="vehicule" size="10">
                    <optgroup label="Renault">
                      <option value="Twingo">Twingo</option>
                      <option value="Clio">Clio</option>
                      <option value="Captur">Captur</option>
                      <option value="Espace">Espace</option>
                    </optgroup>
                    <optgroup label="Tesla">
                      <option value="Modèle S">Modèle S</option>
                      <option value="Modèle 3">Modèle 3</option>
                      <option value="Modèle X">Modèle X</option>
                      <option value="Modèle Y">Modèle Y</option>
                    </optgroup>
                  </select>
                </p>
                <p>
                  <label for="3ut">Sélectionnez vos UT (plusieurs choix)</label><br>
                    <select name="ut[]" size="6" multiple>
                      <option value="UTBM">UTBM</option>
                      <option value="UTC">UTC</option>
                      <option value="UTT">UTT</option>
                      <option value="UTSEUS">UTSEUS</option>
                      <option value="UTM (Martinique)">UTM (Martinique)</option>
                      <option value="UTG (Guyane)">UTG (Guyane)</option>
                    </select>
                </p>
                <p>
                  <input name="news" type="checkbox" value="on">
                  <label for="3news">Je souhaite recevoir la news letter</label>
                </p>
                <p>
                  <input name="remboursement" type="checkbox" value="on">
                  <label for="3remboursment">Je souhaite recevoir le remboursement du déplacement</label>
                </p>
                <p>
                  <input type="submit" value="Submit" class="button bg-success">
                  <input type="reset" value="Reset" class="button bg-danger">
                </p>
              </form>

            </div>      
        </div>
      </div>




    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Antoine Danguillaume rédigée le 26/03/25</small>
    <p/><hr/><p/>
  </body>
</html>
