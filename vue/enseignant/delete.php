<?php 
$idenseignant=$_GET['id_enseignant'];

 ?>
<div id="modaledelete">
  <div class="container-fluid bg bg-white">
      <div class="row">
        <div class="col-md-12">
          <h4>Voulez vraiment supprimer?</h4>
        </div>
      </div>
      <form method="post" action="controler/enseignantcontroler.php?action=delete">
        <input type="hidden" name="idenseignant" value="<?=$idenseignant  ?>">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <input type="submit" class="btn btn-warning" value="Oui">
          </div>
          <div class="col-md-6 col-sm-6">
            <a href="app.php?view=enseignant" class="close btn btn-default">Non</a>
          </div>
        </div>
      </form>
    </div>
</div>