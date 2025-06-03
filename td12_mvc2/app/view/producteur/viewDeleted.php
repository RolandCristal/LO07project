<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results!=-1) {
     echo ("<br><h3>Le producteur d'id " . $results . " a été supprimé </h3><br>");
    } else {
     echo ("<br><h3>Problème de suppression du Producteur. Il est probable qu'il soit présent dans ma table des récoltes.</h3><br>");
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>