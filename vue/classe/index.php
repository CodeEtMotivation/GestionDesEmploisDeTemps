<?php 

$datas=$classedb->readAll();

 ?>
 <br><br><br>
<span style="width: 50px;">
  <section class="panel" style="margin-top: 30px;">    
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Liste des classes</h4>
                    </div>
                    <div class="float-right" style="display: non;">
                      <a href="app.php?view=classe_create">
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
                           <th>Intitule</th>
                           <th>Specialite</th>
                           <th>Niveau</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                        <?php 
                           
                            $Num=0;
                            foreach ($datas as $lignes) {
                              $Num++;
                              

                              $idspecialite=$specialitedb->read($lignes->id_specialite);
                              $idniveau=$niveaudb->read($lignes->id_niveau);

                              $intitule_specialite=$idspecialite->intitule;
                              $intitule_niveau=$idniveau->intitule;

                              $update="app.php?view=classe_update&id_classe=".$lignes->id_classe;
                              $delete="app.php?view=classe_delete&id_classe=".$lignes->id_classe;
                           
                         ?>
                         <tr>
                           <td><?=$Num; ?></td>
                           <td><?=$lignes->intitule; ?></td>
                           <td><?=$intitule_specialite; ?></td>
                           <td><?=$intitule_niveau; ?></td>
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