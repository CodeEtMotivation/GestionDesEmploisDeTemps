           <span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Ajouter Un Utilisateur</h4>
                    </div>
                    <div class="float-right">
                      <a href="app.php?view=acceuil">
                        <span class="btn btn-success mr-1 mt-3">
                         <i class="fas fa-back"></i>Afficher La Liste 
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/userscontroler.php?action=create">
                        <p class="field">
                           <label for="intitule">
                             Nom
                           </label>
                           <input type="text" name="nom" id="intitule" class="form-control" required/>
                        </p>
                        <p class="field">
                           <label for="intitule">
                             Prenom
                           </label>
                           <input type="text" name="prenom" id="intitule" class="form-control" required/>
                        </p>
                        <p class="field">
                           <label for="intitule">
                             Telephone
                           </label>
                           <input type="tel" name="intitule" id="intitule" class="form-control" required/>
                        </p>
                        <p class="field">
                           <label for="intitule">
                             Login
                           </label>
                           <input type="text" name="login" id="intitule" class="form-control" required/>
                        </p>
                        <p class="field">
                           <label for="intitule">
                             Password
                           </label>
                           <input type="password" name="password" id="intitule" class="form-control" required/>
                        </p>
                        <p class="field">
                           <label for="intitule">
                             Role
                           </label>
                           <select name="role" id="" class="form-control">
                              <option>Admin</option>
                              <option>PROGRAMMEUR</option>
                              <option>RESPONSABLE DE NIVEAU</option>
                           </select>
                        </p>
                        <p>
                          <input type="submit" name="valider"  value="valider" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>