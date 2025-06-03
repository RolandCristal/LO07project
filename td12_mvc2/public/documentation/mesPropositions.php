<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Mes propositions</h5>
          <div class="list-group">
            <div class="list-group-item">Il faudrait une amélioration visuelle, mais ce n'est pas le but de l'UE</div>
          </div>
        </div>
    </div>
    
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>