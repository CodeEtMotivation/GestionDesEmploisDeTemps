           <span style="width: 02px;">
    <section class="panel" style="margin-top: 70px;">  
                  <div class="panel-head">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h4>Ajouter Une Filiere</h4>
                        </div>
                        <div class="col-md-7 col-sm-6" style="padding-top: 15px;">
                          <!-- <span class="bg bg-danger" id="erreur">
                            
                            <?php 
                               if (isset($_GET['message'])) {
                                  echo $_GET['message'];
                                } 
                            ?>
                          </span> -->
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <a href="app.php?view=filiere">
                                <span class="btn btn-success mr-1 mt-3">
                                   <i class="fas  fa-share"></i>Afficher La Liste
                                </span>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/filierecontroler.php?action=create">
                        <p class="field">
                           <label for="intitule">
                             Intitule
                           </label>
                           <input type="text" name="intitule" id="intitule" class="form-control" />
                        </p>

                        <p>
                          <input type="submit" name="valider"  value="valider" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>