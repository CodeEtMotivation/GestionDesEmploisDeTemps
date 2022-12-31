            <?php 

          $idannee=$_GET['id_annee'];
          $data=$annee_scolairedb->read($idannee);
          $data2=$matieredb->read($data->id_matiere);
          $data3=$enseignantdb->read($data->id_enseignant);
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
                      <form method="post" action="controler/annee_scolairecontroler.php?action=update">
                        <p class="field">
                           <label for="intitule">
                             Matiere
                           </label>
                           <input type="hidden" name="idannee" value="<?=$idannee;  ?>">
                           <select name="intitule_matiere" class="form-control">
                             <option><?=$data2->intitule ?></option>
                             <?php 
                                $datas=$matieredb->readAll();
                                foreach ($datas as $lignes) {
                              ?>
                              <option><?=$lignes->intitule ?></option>
                              <?php 
                                  }
                               ?>
                           </select>
                        </p>
                        <p class="field">
                           <label for="intitule">
                             ENSEIGNANT
                           </label>
                           <select name="intitule_enseignant" class="form-control">
                             <option><?=$data3->nom ?></option>
                             <?php 
                                $datas=$enseignantdb->readAll();
                                foreach ($datas as $lignes) {
                              ?>
                              <option><?=$lignes->nom ?></option>
                              <?php 
                                  }
                               ?>
                           </select>
                        </p>
                        <p class="field">
                           <label for="intitule">
                             ANNEE_SCOLAIRE
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