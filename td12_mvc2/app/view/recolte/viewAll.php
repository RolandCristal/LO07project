<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        $cols=$results[0];
        $datas=$results[1];
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
            <?php 
                foreach ($cols as $value){
                    echo "<th scolpe='col'>" . $value . "</th>";
                }
            ?>
        </tr>
      </thead>
      <tbody>
          <?php           
          foreach ($datas as $element) {
            echo "<tr>";
            echo "<td>" . $element->getRegion() . "</td><td>" . $element->getCru() . "</td><td>" . $element->getAnnee() . "</td><td>" . $element->getDegre() . "</td><td>" . $element->getNom() . "</td><td>" . $element->getPrenom() . "</td><td>" . $element->getQuantite() . "</td>";
            echo "</tr>";
          }
          ?>
      </tbody>
    </table>
   
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->