
<?php 

if (isset($_GET['erreur'])) {
    $erreur=$_GET['erreur'];
    echo '<script type="text/javascript">';
    echo 'alert("'.$erreur.'")';
    echo '</script>';
  }  
  

$datas=$classedb->readAll();



 ?>

<br><br>
<div class="sm-st clearfix" id="vue-ensamble">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a href="app.php?view=emploi_start" class="float-right">
                     <span class="btn btn-success mr-1 mt-3">
                         <i class="fas fa-plus"></i>Enregistrer Un nouveau Emploi de Temp
                     </span>
                </a>
                <br>
            </div>
          </div>
        </div>
</div>

<span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  

                  <h3>
                    POUR AFFICHER SELECTIONNER:
                  </h3>  

                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/emploicontroler.php?action=startA">
                        
                        <p class="field">
                           <label for="intitule">
                             SELECTIONNER UNE CLASS
                           </label>
                           
                           <select name="classe_intitule" class="form-control"> 
                             <?php 

                                foreach ($datas as $lignes) {
                          
                              ?>
                              <option><?=$lignes->intitule;  ?></option>
                              <?php 

                                  }
                               ?>
                           </select>
                        </p>
                        
                        <p class="field">
                           <label for="intitule">
                             ENTRER la SEMAINE
                           </label>
                           <input type="text" name="semaine" class="form-control" required>
                        </p>
                        <p>
                          <input type="submit" name="valider"  value="valider" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>