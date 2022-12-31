            <?php 

          $idclasse=$_GET['id_classe'];
          $data=$classedb->read($idclasse);
          $data2=$specialitedb->read($data->id_specialite);
          $data3=$niveaudb->read($data->id_niveau);
           ?>
           <span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Modifier Les Paramettres D'Enseignement D'Une Matiere Pour Une Annee</h4>
                    </div>
                    <div class="float-right">
                      <a href="app.php?view=annee_scolaire">
                        <span class="btn btn-success mr-1 mt-3">
                         <i class="fas fa-back"></i>Afficher La Liste 
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/classecontroler.php?action=update">
                        <input type="hidden" name="idclasse" value="<?=$idclasse;  ?>">
                        <p class="field">
                           <label for="intitule">
                             Intitule
                           </label>
                           <input type="text" name="intitule" value="<?=$data->intitule;  ?>" class="form-control">
                        </p>
                        <p class="field">
                           <label for="">
                             Specialite
                           </label>
                           <select name="intitule_specialite" class="form-control">
                             <option><?=$data2->intitule;  ?></option>
                             <?php 
                                $datas=$specialitedb->readAll();
                                foreach ($datas as $lignes) {
                              ?>
                              <option><?=$lignes->intitule ?></option>
                              <?php 
                                  }
                               ?>
                           </select>
                        </p>
                        <p class="field">
                           <label for="">
                             Niveau
                           </label>
                           <option><?=$data3->intitule;  ?></option>
                           <select name="intitule_niveau" class="form-control">
                             <?php 
                                $datas=$niveaudb->readAll();
                                foreach ($datas as $lignes) {
                              ?>
                              <option><?=$lignes->intitule ?></option>
                              <?php 
                                  }
                               ?>
                           </select>
                        </p>
                        
                        <p>
                          <input type="submit" name="valider"  value="valider" class="btn btn-success">
                        </p>
                      </form>            
                  </div>
                </section>  
</span>