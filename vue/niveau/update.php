            <?php 

          $idniveau=$_GET['id_niveau'];
          $data=$niveaudb->read($idniveau);
          
           ?>
           <span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Modifier Un Niveau</h4>
                    </div>
                    <div class="float-right">
                      <a href="app.php?view=niveau">
                        <span class="btn btn-success mr-1 mt-3">
                         <i class="fas fa-back"></i>Afficher La Liste 
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/niveaucontroler.php?action=update">
                        <input type="hidden" name="idniveau" value="<?=$data->id_niveau;  ?>">
                        <p class="field">
                           <label for="intitule">
                             Intitule
                           </label>
                           <input type="text" name="intitule" value="<?=$data->intitule ?>" class="form-control">
                        </p>
                        <p>
                          <input type="submit" name="valider"  value="Modifier" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>