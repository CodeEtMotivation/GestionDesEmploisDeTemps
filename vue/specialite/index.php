<?php 

$datas=$specialitedb->readAll();

 ?>
<span style="width: 25vw;">
    <section class="panel">  
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Listes Des Specialites</h4>
                    </div>
                    <div class="float-right">
                     <a href="app.php?view=specialite_create">
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
                     <table class="table table-hover" id="example4">
                       <thead>
                         <tr>
                           <th>Num</th>
                           <th>Intitule</th>
                           <th>Filiere</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                        <?php 
                           
                            $Num=0;
                            foreach ($datas as $lignes) {
                              $Num++;
                              

                              $data1=$filieredb->read($lignes->id_filiere);
                             

                              $update="app.php?view=specialite_update&id_specialite=".$lignes->id_specialite;
                              $delete="app.php?view=specialite_delete&id_specialite=".$lignes->id_specialite;
                           
                         ?>
                         <tr>
                           <td><?=$Num; ?></td>
                           <td><?=$lignes->intitule; ?></td>
                           <td><?=$data1->intitule; ?></td>
                           
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
                            <?php 
                               }
                          ?> 
                         </tr>
                       </tbody>
                     </table>            
                  </div>
                </section>  
</span>