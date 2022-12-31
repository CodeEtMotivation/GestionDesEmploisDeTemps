
<?php 

$datas=$salledb->readAll();

 ?>
 <br><br><br><br>
<span style="width: 25vw;">
    <section class="panel">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Listes Des Salles</h4>
                    </div>
                    <div class="float-right">
                     <a href="app.php?view=salle_create">
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
                     <table class="table table-hover" id="example5">
                       <thead>
                         <tr>
                           <th>Num</th>
                           <th>Intitule</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                      
                        <tbody>
                        <?php 
                            $Num=0;
                            foreach ($datas as $lignes) {
                              $Num++;
                              $update="app.php?view=salle_update&id_salle=".$lignes->id_salle;
                              $delete="app.php?view=salle_delete&id_salle=".$lignes->id_salle;
                           
                         ?>
                         <tr>
                           <td><?=$Num; ?></td>
                           <td><?=$lignes->intitule; ?></td>
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
                            <?php 
                               }
                          ?> 
                         </tr>
                       </tbody>
                     </table>            
                  </div>
                </section>  
</span>