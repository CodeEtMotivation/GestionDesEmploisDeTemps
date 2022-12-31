            <?php 

          $idspecialite=$_GET['id_specialite'];
          $data=$specialitedb->read($idspecialite);
          $data2=$filieredb->read($data->id_filiere);
           ?>
           <span style="width: 02px;">
    <section class="panel" style="margin-top: 70px;">  
                  <div class="panel-head">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h4>Modifier Une specialite</h4>
                        </div>
                        <div class="col-md-7 col-sm-6" style="padding-top: 15px;">
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <a href="app.php?view=specialite">
                                <span class="btn btn-success mr-1 mt-3">
                                   <i class="fas fa-back"></i>Afficher La Liste
                                </span>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/specialitecontroler.php?action=update">
                        <p class="field">
                           <label for="intitule">
                             Intitule
                           </label>
                           <input type="text" name="intitule" id="intitule" class="form-control" value="<?=$data->intitule  ?>" />
                           <input type="hidden" name="idspecialite" value="<?=$idspecialite;  ?>">
                        </p>
                        <p class="field">
                           <label for="">
                             Filiere
                           </label>
                           <select name="intitule_filiere" class="form-control">
                            <option><?=$data2->intitule ?></option>
                             <?php 
                                $datas=$filieredb->readAll();
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