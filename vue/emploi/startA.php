

    <?php 


if (isset($_GET['donnee'])) {
  $classe=$_GET['donnee'];
  $semaine=$_GET['semaine'];
}


 ?>
    
<br><br><br>
 <div class="sm-st clearfix" id="vue-ensamble">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <input type="search" id="myInput" class="form-control">
            </div>
            <div class="col-md-6" style="font-size: 18px;">
                <a href="app.php?view=emploi_start">
                     <span class="btn btn-success mr-1 mt-3">
                         <i class="fas fa-plus"></i>Enregistrer Un nouveau Emploi de Temp
                     </span>
                </a>
                <br>
            </div>
          </div>
        </div>
</div>

<span style="width: 50px;" id="re">
  <div id="rech">
    <section class="panel" style="margin-top: 30px;">

                  <div class="panel-head">
                   <a href="">
                      <span class="btn btn-primary mr-1 mt-3 float-right">
                         <i class="fas fa-pen"></i>Modifier
                     </span>
                   </a>
                   
                      <span class="btn btn-success mr-1 mt-3 float-right" onClick="imprimer('sectionAimprimer')">
                         <i class="fas fa-print"></i>Imprimer
                     </span>
                  
                     <br><br><br>
                  </div>
                  


                  <div id="sectionAimprimer">
                    

                        <div class="container-fluid">

                    <div class="row">

                      <div class="col-md-2">
                         <img src="images/téléchargement.jpeg" style="width: 100px;height: 100px;">
                      </div>

                      <div class="col-md-10" style="text-align: center;">

                        <h3 style="text-decoration: underline;color: blue;">
                          institue universitaire et strategique de l'estuaire
                        </h3>
                        <h4 style="text-decoration: underline;color: red;">estuary academie and strategie institue(iues/insam)</h4>
                        <h5 style="text-decoration: underline;">sous la tutel de l'universite de dschang et de buea</h5>
                      </div>

                    </div>
                    <div class="row">

                      <div class="col-md-12">
                        <h3 style="text-align: center;">emploi de temps semaine: 
                         <?php echo $semaine; ?>
                        </h3>
                      </div>

                    </div>

                  </div>
                  <div class="panel-body table-responsive">

                      <div>
                          
                          <table class="table table-hover" id="exam">
                               <thead>
                                 <tr>
                                   <th rowspan="2">Jour</th>
                                   <th rowspan="2">horaire</th>
                                   <th colspan="3" id="l">
                                     <?php 
                                      $d=$classedb->read($classe);

                                      echo $d->intitule;

                                      ?>
                                   </th>
                                 </tr>
                                 <tr>
                                  <th>matieres</th>
                                  <th>enseignants</th>
                                  <th>salles</th>
                                  
                                </tr>
                               </thead>
                             <tbody>

                                 
                               <tr>
                                 <td rowspan="5">Lundi</td>
                               </tr>
                                <?php 

                                        $datas=$emploidb->read($semaine,$classe,"Lundi");
                                        foreach ($datas as $lignes) {
                                        $salle=$salledb->read($lignes->id_salle);

                                   ?>
                               <tr>
                                 <td><?=$lignes->horaire;  ?></td>
                                 <td><?=$lignes->intitule_matiere;  ?></td>
                                 <td><?=$lignes->intitule_enseignant;  ?></td>
                                 <td><?=$salle->intitule;  ?></td>
                              
                               </tr>
                               <?php 


                                      }

                                ?>


                               <tr>
                                 <td rowspan="5">Mardi</td>
                               </tr>
                                <?php 

                                        $datas=$emploidb->read($semaine,$classe,"Mardi");
                                        foreach ($datas as $lignes) {
                                        $salle=$salledb->read($lignes->id_salle);

                                   ?>
                               <tr>
                                 <td><?=$lignes->horaire;  ?></td>
                                 <td><?=$lignes->intitule_matiere;  ?></td>
                                 <td><?=$lignes->intitule_enseignant;  ?></td>
                                 <td><?=$salle->intitule;  ?></td>
                              
                               </tr>
                               <?php 


                                      }

                                ?>



                                <tr>
                                 <td rowspan="5">Mecredi</td>
                               </tr>
                                <?php 

                                        $datas=$emploidb->read($semaine,$classe,"Mercredi");
                                        foreach ($datas as $lignes) {
                                         $salle=$salledb->read($lignes->id_salle);

                                   ?>
                               <tr>
                                 <td><?=$lignes->horaire;  ?></td>
                                 <td><?=$lignes->intitule_matiere;  ?></td>
                                 <td><?=$lignes->intitule_enseignant;  ?></td>
                                 <td><?=$salle->intitule;  ?></td>
                              
                               </tr>
                               <?php 


                                      }

                                ?>



                                <tr>
                                 <td rowspan="5">Jeudi</td>
                               </tr>
                                <?php 

                                        $datas=$emploidb->read($semaine,$classe,"Jeudi");
                                        foreach ($datas as $lignes) {
                                        $salle=$salledb->read($lignes->id_salle);

                                   ?>
                               <tr>
                                 <td><?=$lignes->horaire;  ?></td>
                                 <td><?=$lignes->intitule_matiere;  ?></td>
                                 <td><?=$lignes->intitule_enseignant;  ?></td>
                                 <td><?=$salle->intitule;  ?></td>
                              
                               </tr>
                               <?php 


                                      }

                                ?>



                                <tr>
                                 <td rowspan="5">Vendredi</td>
                               </tr>
                                <?php 

                                        $datas=$emploidb->read($semaine,$classe,"Vendredi");
                                        foreach ($datas as $lignes) {
                                        $salle=$salledb->read($lignes->id_salle);

                                   ?>
                               <tr>
                                 <td><?=$lignes->horaire;  ?></td>
                                 <td><?=$lignes->intitule_matiere;  ?></td>
                                 <td><?=$lignes->intitule_enseignant;  ?></td>
                                 <td><?=$salle->intitule;  ?></td>
                              
                               </tr>
                               <?php 


                                      }

                                ?>




                                <tr>
                                 <td rowspan="5">Samedi</td>
                               </tr>
                                <?php 

                                        $datas=$emploidb->read($semaine,$classe,"Samedi");
                                        foreach ($datas as $lignes) {
                                        $salle=$salledb->read($lignes->id_salle);

                                   ?>
                               <tr>
                                 <td><?=$lignes->horaire;  ?></td>
                                 <td><?=$lignes->intitule_matiere;  ?></td>
                                 <td><?=$lignes->intitule_enseignant;  ?></td>
                                 <td><?=$salle->intitule;  ?></td>
                              
                               </tr>
                               <?php 


                                      }

                                ?>





                                <tr>
                                 <td rowspan="5">Dimanche</td>
                               </tr>
                                <?php 

                                        $datas=$emploidb->read($semaine,$classe,"Dimanche");
                                        foreach ($datas as $lignes) {
                                        $salle=$salledb->read($lignes->id_salle);

                                   ?>
                               <tr>
                                 <td><?=$lignes->horaire;  ?></td>
                                 <td><?=$lignes->intitule_matiere;  ?></td>
                                 <td><?=$lignes->intitule_enseignant;  ?></td>
                                 <td><?=$salle->intitule;  ?></td>
                              
                               </tr>
                               <?php 


                                      }

                                ?>




                                
                              

                            


                             </tbody>
                     </table>           

                   </div>

                  </div>



                  </div>
                </section> 
  </div>



               
</span>