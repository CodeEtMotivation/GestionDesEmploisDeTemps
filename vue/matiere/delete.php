<?php 
$idmatiere=$_GET['id_matiere'];

 ?>
<div id="modaledelete">
  <div class="container-fluid bg bg-white">
      <div class="row">
        <div class="col-md-12">
          <h4>Voulez vraiment supprimer?</h4>
        </div>
      </div>
      <form method="post" action="controler/matierecontroler.php?action=delete">
        <input type="hidden" name="idmatiere" value="<?=$idmatiere;  ?>">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <input type="submit" class="btn btn-warning" value="Oui">
          </div>
          <div class="col-md-6 col-sm-6">
            <a href="app.php?view=matiere" class="close btn btn-default">Non</a>
          </div>
        </div>
      </form>
    </div>
</div>