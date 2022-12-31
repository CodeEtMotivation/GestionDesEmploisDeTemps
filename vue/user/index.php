<?php 

$datas=$usersdb->readAll();

 ?>
<span style="width: 50px;">
  <section class="panel">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Liste des utilisateurs</h4>
                    </div>
                    <div class="float-right" style="display: non;">
                    <a href="app.php?view=user_create">
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
                           <th>Nom</th>
                           <th>Prenom</th>
                           <th>Role</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                       <?php 
                           
                           
                           foreach ($datas as $lignes) {
                            

                             $update="app.php?view=user_update&id_users=".$lignes->id_users;
                             $delete="app.php?view=users_delete&id_users=".$lignes->id_users;
                          
                        ?>
                         <tr>
                           <td><?=$lignes->nom; ?></td>
                           <td><?=$lignes->prenom; ?></td>
                           <td><?=$lignes->role; ?></td>
                           <td width="300">
                              <?=$act; ?>
                              <a href="<?php echo $update; ?>" style="display: <?=$display?>;">
                                <span class="btn btn-primary mr-1 mt-3">
                                  <i class="fas fa-pen"></i> Modifier
                                </span>
                              </a>
                              <a href="<?php echo $delete; ?>" style="display: <?=$display?>;">
                                <span class="btn btn-danger mr-1 mt-3">
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