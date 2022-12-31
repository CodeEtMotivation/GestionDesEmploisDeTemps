<?php 

$datas=$enseignantdb->readAll();

 ?>
<span style="width: 50px;">
  <section class="panel" style="margin-top: 30px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Listes des Enseignants</h4>
                    </div>
                    <div class="float-right" style="display: non;">
                      <a href="app.php?view=enseignant_create">
                        <?php 
                        $in=$_SESSION['profil']->role;

                        if ($in == "Admin") {
                             $display="";
                             $act="";
                             echo '
                                <span class="btn btn-success mr-1 mt-3">
                                    <i class="fas fa-plus"></i>Enregistrer
                                </span>
                             ';
                        }else{
                              $display="none";
                              $act="Pas d'action";
                        }

                         ?>
                      </a>
                    </div>
                  </div>
                  <div class="panel-body table-responsive">
                     <table class="table table-hover" id="example">
                       <thead>
                         <tr>
                           <th>Num</th>
                           <th>Nom</th>
                           <th>Prenom</th>
                           <th>Sexe</th>
                           <th>Telephone</th>
                           <th>Email</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                          <?php 
                            $Num=0;
                            foreach ($datas as $lignes) {
                              $Num++;
                              $update="app.php?view=enseignant_update&id_enseignant=".$lignes->id_enseignant;
                              $delete="app.php?view=enseignant_delete&id_enseignant=".$lignes->id_enseignant;
                           
                         ?>
                         <tr>
                           <td><?php echo $Num;  ?></td>
                           <td><?php echo $lignes->nom; ?></td>
                           <td><?php echo $lignes->prenom; ?></td>
                           <td><?php echo $lignes->sexe; ?></td>
                           <td><?php echo $lignes->telephone; ?></td>
                           <td><?php echo $lignes->email; ?></td>
                           <td width="300">
                              <?=$act; ?>
                              <a href="<?php echo $update; ?>">
                                <span class="btn btn-primary mr-1 mt-3" style="display: <?=$display?>;">
                                  <i class="fas fa-pen"></i> Modifier
                                </span>
                              </a>
                              <a href="<?php echo $delete; ?>">
                                <span class="btn btn-danger mr-1 mt-3" style="display: <?=$display?>;">
                                  <i class="fas fa-trash"></i> supprimer
                                </span>
                              </a>
                           </td>
                         </tr>
                         <?php 
                               }
                          ?> 
                       </tbody>
                     </table>            
                  </div>
                </section>  
</span>