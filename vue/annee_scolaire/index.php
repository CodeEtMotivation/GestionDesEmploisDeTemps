<?php 

$datas=$annee_scolairedb->readAll();

 ?>
<span style="width: 50px;">
  <section class="panel" style="margin-top: 30px;">    
                  <div class="panel-head">
                    <div class="float-left ml-3 mt-3">
                      <h4>Liste des Enseignants Des Matieres Pour Une Annee Scolaire</h4>
                    </div>
                    <div class="float-right" style="display: non;">
                      <a href="app.php?view=annee_scolaire_create">
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
                           <th>Enseignant</th>
                           <th>Annee d'Enseignement</th>
                           <th>Matiere </th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                        <?php 
                           
                            $Num=0;
                            foreach ($datas as $lignes) {
                              $Num++;
                              

                              $data1=$matieredb->read($lignes->id_matiere);
                              $data2=$enseignantdb->read($lignes->id_enseignant);

                              $update="app.php?view=annee_scolaire_update&id_annee=".$lignes->id_annee_scolaire;
                              $delete="app.php?view=annee_scolaire_delete&id_annee=".$lignes->id_annee_scolaire;
                           
                         ?>
                         <tr>
                           <td><?=$Num; ?></td>
                           <td><?=$data2->nom; ?></td>
                           <td><?=$lignes->intitule; ?></td>
                           <td><?=$data1->intitule; ?></td>
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