
<?php
require_once 'Cursus.class.php';
require_once 'Module.class.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LO07 2023 TD02 : bootstrap 5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css" />

</head>

<body>
    <div class="container">

        <h1>Introduction à Bootstrap 5.3</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <!-- ================================================================================================================ -->
        <!-- ===== Exercice 2 : Squelette de la page avec modification du navbar -->
        <!-- ================================================================================================================ -->

        <?php include 'nav.html' ?>

        <!-- ================================================================================================================ -->
        <!-- ===== Exercice 3 ===== -->
        <!-- ================================================================================================================ -->

        <p />
        <hr />
        <div class="card">
            <div class="card-body bg-info">
                <h2 class="card-title">Exercice 2: Collection d'objets Module</h2><br>
                <h5>Définition des modules</h5>
                <?php
                $ue1 = new Module("lo07", "Technologies du Web", "TM", "140");
                $ue2 = new Module("if26", "Applications Mobiles Android", "TM", "77");
                echo "Module(lo07, Technologies du Web, TM, 140)<br />\n";
                echo "Module(if26, Applications Mobiles Android, TM, 77)<br />\n";
                ?>

                <h5>Définition d'un cursus</h5>
                <?php
                $cursus = new Cursus();

                echo "addmodule : Module(lo07, Technologies du Web, TM, 140)<br />\n";
                $cursus->addModule($ue1);

                echo "addmodule : Module(if26, Applications Mobiles Android, TM, 77)<br />\n";
                $cursus->addModule($ue2);
                ?>

                <h5>Affichage d'un cursus</h5>
                <pre><?php
                        print_r($cursus);
                        ?></pre>
            </div>
        </div>


    </div>

    <p />
    <hr />
    <p />
    <small>Page d'Antoine Danguillaume rédigée le 23/04/2025</small>
    <p />
    <hr />
    <p />

</body>

</html>