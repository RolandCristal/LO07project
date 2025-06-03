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
        <!-- ===== Exercice 1 ===== -->
        <!-- ================================================================================================================ -->

        <p />
        <hr />
        <a id='exercice1' />
        <div class="card">
            <div class="card-body bg-info">
                <h5 class="card-title">Exercice 3 : Constitution d’équipes de joueurs pour le tournoi LO07</h5>
                <div class='mx-lg-3'>

                    <form method="get" action="td05_tournoi_action.php">
                        <?php
                            $nb_joueurs=$_GET['NbJoueurs'];
                            for ($i=1;$i<$nb_joueurs+1;$i++){
                                echo 
                                    '<hr><p>
                                        <label for="nom">Nom ' . $i .'</label><br>
                                        <input id="nom" name="Nom_'.$i.'" type="text">
                                    </p>
                                    <p>
                                        <label for="prenom">Prénom ' . $i . '</label><br>
                                        <input id="prenom" name="Prenom_'.$i.'" type="text">
                                    </p>
                                    <p>
                                        <label for="email">Email ' . $i . '</label><br>
                                        <input id="email" name="Email_'.$i.'" type="email">
                                    </p>';
                            }
                        ?>

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
    <p />
    <hr />
    <p />
    <small>Page d'Antoine Danguillaume rédigée le 02/04/2025</small>
    <p />
    <hr />
    <p />
</body>

</html>