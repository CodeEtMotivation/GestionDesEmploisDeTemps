<?php 


$datas=$classedb->readAll();



 ?>

<br><br><br><br><br>

<span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
    
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/emploicontroler.php?action=start">
                        
                        <p class="field">
                           <label for="intitule">
                             SELECTIONNER UNE CLASSE
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
                        <p class="field">
                           <label for="intitule">
                             Entrer l'Annee_SCOALIRE
                           </label>
                           <input type="text" name="annee_scolaire" class="form-control">
                        </p>
                        <p class="field">
                           <label for="intitule">
                             ENTRER la SEMAINE
                           </label>
                           <input type="text" name="semaine" class="form-control">
                        </p>
                        <p>
                          <input type="submit" name="valider"  value="valider" class="btn btn-success">
                        </p>
                      </form>          
                  </div>
                </section>  
</span>