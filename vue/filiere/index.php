
<?php 

$datas=$filieredb->readAll(); 

 ?>
<span style="width: 25vw;">
    <section class="panel" style="margin-top: 70px;">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Listes Des Filieres</h4>
                    </div>
                    <div class="float-right">
                      <a href="app.php?view=filiere_create">
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
                     <table class="table table-hover" id="example3">
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
                              $update="app.php?view=filiere_update&id_filiere=".$lignes->id_filiere;
                              $delete="app.php?view=filiere_delete&id_filiere=".$lignes->id_filiere;
                           
                         ?>
                         <tr>
                           <td><?php echo $Num;  ?></td>
                           <td><?php echo $lignes->intitule; ?></td>

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

