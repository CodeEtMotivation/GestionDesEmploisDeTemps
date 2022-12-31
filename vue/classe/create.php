           <span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Ajouter classe</h4>
                    </div>
                    <div class="float-right">
                      <a href="app.php?view=classe">
                        <span class="btn btn-success mr-1 mt-3">
                         <i class="fas fa-back"></i>Afficher La Liste 
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/classecontroler.php?action=create">
                        <p class="field">
                           <label for="intitule">
                             Intitule
                           </label>
                           <input type="text" name="intitule" class="form-control">
                        </p>
                        <p class="field">
                           <label for="">
                             Specialite
                           </label>
                           <select name="intitule_specialite" class="form-control">
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