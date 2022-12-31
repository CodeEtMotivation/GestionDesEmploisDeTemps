            <?php 

          $idenseignant=$_GET['id_enseignant'];
          $data=$enseignantdb->read($idenseignant);
           ?>
           <span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Modifier Un Enseignant</h4>
                    </div>
                    <div class="float-right">
                      <a href="app.php?view=enseignant">
                        <span class="btn btn-success mr-1 mt-3">
                         <i class="fas fa-back"></i>Afficher La Liste 
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/enseignantcontroler.php?action=update">
                        <p class="field">
                           <label for="nom">
                             Nom
                           </label>
                           <input type="hidden" name="idenseignant" value="<?=$data->id_enseignant;  ?>">
                           <input type="text" name="nom" id="nom" class="form-control" value="<?=$data->nom;  ?>" required/>
                        </p>
                        <p class="field">
                           <label for="prenom">
                             Prenom
                           </label>
                           <input type="text" name="prenom" id="prenom" class="form-control" value="<?=$data->prenom;  ?>" required/>
                        </p>
                        <p class="field">
                           <label for="sexe">
                             Sexe
                           </label>
                           <select name="sexe" id="sexe" class="form-control" >
                            <option><?=$data->sexe;  ?></option>
                             <option>Masculin</option>
                             <option>Feminin</option>
                           </select>
                        </p>
                        <p class="field">
                           <label for="telephone">
                             Telephone
                           </label>
                           <input type="tel" name="telephone" id="telephone" value="<?=$data->telephone;  ?>" class="form-control" required/>
                        </p>
                        <p class="field">
                           <label for="email">
                             Email
                           </label>
                           <input type="email" name="email" id="email" class="form-control" value="<?=$data->email;  ?>" required/>
                        </p>
                        <p>
                          <input type="submit" name="valider"  value="Modifier" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>