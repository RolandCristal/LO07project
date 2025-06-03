<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TD03 - Introduction à PHP</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h1>TD03 - Introduction à PHP</h1>
            <script 
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>

            <!-- ================================================================================================================ -->
            <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
            <!-- ================================================================================================================ -->

            <nav class="navbar navbar-expand-lg bg-primary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">LO07 TD03</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
                            <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
                            <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>
                            <li class="nav-item"><a class="nav-link" href="#exercice4">Exercice 4</a></li>
                            <li class="nav-item"><a class="nav-link" href="#exercice5">Exercice 5</a></li>

                            <!-- ===== Documentation ===== -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="https://www.php.net/manual/fr/" target="_blank">Documentation officielle PHP</a></li>
                                    <li><a class="dropdown-item" href="https://www.w3schools.com/php/" target="_blank">W3Schools PHP Tutorial</a></li>
                                    <li><a class="dropdown-item" href="https://www.tutorialspoint.com/php/index.htm" target="_blank">TutorialsPoint PHP</a></li>
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

            <p/><hr/>
            <a id='exercice1'/>
            <div class="card">
                <div class="card-body bg-info">
                    <h5 class="card-title">Exercice 1 : réparation et validation</h5>

                    <div class='mx-lg-3'> 

                        <?php
                        echo "Bonjour à tous";
                        ?>

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
                    <h5 class="card-title">Exercice 2 : variables PHP</h5>
                    <div class='mx-lg-3'> 

                        <?php
                        // Définition des variables
                        $nom = "Danguillaume";
                        $prenom = "Antoine";
                        $age = 21;
                        $ingenieur = true;

                        // Affichage des variables dans une liste Bootstrap
                        echo "<ul class='list-group'>";
                        echo "<li class='list-group-item'>Nom = $nom</li>";
                        echo "<li class='list-group-item'>Prénom = $prenom</li>";
                        echo "<li class='list-group-item'>Age = $age</li>";
                        echo "<li class='list-group-item'>Ingénieur = " . ($ingenieur ? "1" : "0") . "</li>";
                        echo "</ul>";
                        ?>

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
                    <h5 class="card-title">Exercice 3 : tableaux PHP</h5>
                    <div class='mx-lg-3'> 

                        <?php
                        $tabCapitales = array(
                            "Vienne",
                            "Sofia",
                            "Nicosie", 
                            "Copenhague", 
                            "Helsinki",
                            "Vilnius",
                            "Bratislava",
                            "Ljubljana", 
                            "Riga",
                            "Tallinn"       
                        );

                        $tabCapitales[] = "Varsovie";

                        unset($tabCapitales[4]);

                        echo "<h6>Affichage avec print_r :</h6>";
                        echo "<pre>";
                        print_r($tabCapitales);
                        echo "</pre>";

                        echo "<h6>Affichage avec foreach :</h6>";
                        echo "<ul class='list-group'>";
                        foreach ($tabCapitales as $capitale) {
                            echo "<li class='list-group-item'>$capitale</li>";
                        }
                        echo "</ul>";

                        echo "<h6>Affichage avec implode :</h6>";
                        echo "<p>" . implode(", ", $tabCapitales) . "</p>";

                        echo "<h6>Nombre d'éléments :</h6>";
                        echo "<p>" . count($tabCapitales) . "</p>";

                        sort($tabCapitales);
                        echo "<h6>Tableau trié :</h6>";
                        echo "<p>" . implode(", ", $tabCapitales) . "</p>";
                        ?>
                        
                    </div>      
                </div>
            </div>

            <!-- ================================================================================================================ -->
            <!-- ===== Exercice 4 ===== -->
            <!-- ================================================================================================================ -->

            <p/><hr/>
            <a id='exercice4'/>
            <div class="card">
                <div class="card-body bg-info">
                    <h5 class="card-title">Exercice 4 : tableaux associatifs</h5>
                    <div class='mx-lg-3'> 

                        <?php
                        $hashCapitales = array(
                            "Bulgarie" => "Sofia",
                            "Chypre" => "Nicosie",
                            "Estonie" => "Tallinn",
                            "Lettonie" => "Riga",
                            "Lituanie" => "Vilnius",
                            "Roumanie" => "Bucarest"
                        );

                        echo "<h6>Capitale de l'Estonie :</h6>";
                        echo "<p>" . $hashCapitales["Estonie"] . "</p>";

                        $hashCapitales["Estonie"] = "Narva";
                        echo "<h6>Après ajout de (Estonie, Narva) :</h6>";
                        echo "<p>Capitale de l'Estonie : " . $hashCapitales["Estonie"] . "</p>";

                        echo "<h6>Affichage avec print_r :</h6>";
                        echo "<pre>";
                        print_r($hashCapitales);
                        echo "</pre>";

                        echo "<h6>Affichage avec foreach :</h6>";
                        echo "<ul class='list-group'>";
                        foreach ($hashCapitales as $pays => $capitale) {
                            echo "<li class='list-group-item'>$pays ==> $capitale</li>";
                        }
                        echo "</ul>";

                        echo "<h6>Liste des clés :</h6>";
                        echo "<pre>";
                        print_r(array_keys($hashCapitales));
                        echo "</pre>";

                        echo "<h6>Liste des valeurs :</h6>";
                        echo "<pre>";
                        print_r(array_values($hashCapitales));
                        echo "</pre>";
                        ?>

                    </div>      
                </div>
            </div>

            <!-- ================================================================================================================ -->
            <!-- ===== Exercice 5 ===== -->
            <!-- ================================================================================================================ -->

            <p/><hr/>
            <a id='exercice5'/>
            <div class="card">
                <div class="card-body bg-info">
                    <h5 class="card-title">Exercice 5 : fonctions PHP</h5>
                    <div class='mx-lg-3'> 

                        <?php

                        function badge($label, $compteur) {
                            return "<button class='btn btn-primary'>$label <span class='badge bg-secondary'>$compteur</span></button>";
                        }

                        echo badge("Web", 6);

                        echo "<br><br>";
                        foreach ($tabCapitales as $capitale) {
                            echo badge($capitale, strlen($capitale)) . " ";
                        }
                        ?>

                    </div>
                </div>
            </div>

            <!-- ================================================================================================================ -->
            <p/><hr/><p/>
            <small>Page d'Antoine Danguillaume rédigée le 19/03/25</small>
            <p/><hr/><p/>
    </body>
</html>