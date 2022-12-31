<?php 

$datas=$classedb->readAll();

 ?>
 
<br><br><br>       
<span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                 
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/contenircontroler.php?action=start">
                        
                        <p class="field">
                          <div class="float-right mb-5">
                              <a href="app.php?view=contenir_create" class="btn btn-success">
                                  Enregistrer
                              </a>
                              <br>
                            </div>
                           <label for="intitule">
                             Classe
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
                        <p>
                          <input type="submit" name="valider"  value="valider" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>