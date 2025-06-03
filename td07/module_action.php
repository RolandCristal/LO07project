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
                    <h5 class="card-title">Formulaire pour la collecte des données d'un module</h5>

                    <?php
                    require_once 'Module.class.php';
                    require_once 'Charte.class.php';

                    // Remplacer les lignes 43-46 par :
                    $ue = new Module(
                            filter_input(INPUT_GET, 'sigle', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '',
                            filter_input(INPUT_GET, 'label', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '',
                            filter_input(INPUT_GET, 'categorie', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '',
                            filter_input(INPUT_GET, 'effectif', FILTER_SANITIZE_NUMBER_INT) ?? 0
                    );

                    if ($ue->valide()) {
                        $ue->pageOK();
                        echo "<h3>SauveTXT</h3>\n";
                        echo $ue->sauveTXT() . "<br />\n";
                        echo "<h3>createTable</h3>\n";
                        $ue->createTable("modules");
                        echo "<h3>SauveBDR</h3>\n";
                        echo $ue->sauveBDR(" modules ") . "<br />\n";
                        $ue->pageFoot();
                    } else {
                        $ue->pageKO();
                    }
                    ?>       

                </div>
            </div>


        </div>

        <p/><hr/><p/>
        <small>Page d'Antoine Danguillaume rédigée le 23/04/2025</small>
        <p/><hr/><p/>    

    </body>
</html>
