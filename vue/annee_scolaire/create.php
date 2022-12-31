           
<span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Ajouter Les Paramettres D'Enseignement D'Une Matiere Pour Une Annee</h4>
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
                      <form method="post" action="controler/annee_scolairecontroler.php?action=create">
                        <p class="field">
                           <label for="matiere">
                             Matiere
                           </label>
                           <select name="intitule_matiere" class="form-control">
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
                           <label for="enseignant">
                             ENSEIGNANT
                           </label>
                           <select name="intitule_enseignant" class="form-control">
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
                           <input type="text" name="intitule" class="form-control">
                        </p>
                        <p>
                          <input type="submit" name="valider"  value="valider" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>