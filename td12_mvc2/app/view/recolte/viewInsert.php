<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='recolteInsertedUpdated'>    
        <label for="id">Sélectionnez un vin:</label> <select class="form-control" id='vin_id' name='vin_id' style="width: 350px">
            <?php
            foreach ($datas_vin as $vin) {
             echo ("<option value='" . $vin->getVin_id()  . "'>" . $vin->getVin_id() . " : " . $vin->getCru() . " : " . $vin->getAnnee() . " : " . $vin->getDegre() . "</option>");
            }
            ?>
        </select>
        <label for="id">Sélectionnez un producteur:</label> <select class="form-control" id='producteur_id' name='producteur_id' style="width: 350px">
            <?php
            foreach ($datas_producteur as $producteur) {
             echo ("<option value='" . $producteur->getProducteur_id() . "'>" . $producteur->getProducteur_id() . " : " . $producteur->getNom() . " : " . $producteur->getPrenom() . " : " . $producteur->getRegion() . "</option>");
            }
            ?>
        </select>
        <label class='w-25' for="id">Quantité : </label><br/>
        <input type="number" name='quantite' value='10'><br/>          
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->