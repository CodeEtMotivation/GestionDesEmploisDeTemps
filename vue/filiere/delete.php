<?php 
$idfiliere=$_GET['id_filiere'];

 ?>
<div id="modaledelete">
  <div class="container-fluid bg bg-white">
      <div class="row">
        <div class="col-md-12">
          <h4>Voulez vraiment supprimer?</h4>
        </div>
      </div>
      <form method="post" action="controler/filierecontroler.php?action=delete">
        <input type="hidden" name="idfiliere" value="<?=$idfiliere  ?>">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <input type="submit" class="btn btn-warning" value="Oui">
          </div>
          <div class="col-md-6 col-sm-6">
            <a href="app.php?view=filiere" class="close btn btn-default">Non</a>
          </div>
        </div>
      </form>
    </div>
</div>