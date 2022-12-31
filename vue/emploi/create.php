<?php 
$classe=$_GET['donnee'];
$annee=$_GET['annee'];
$semaine=$_GET['semaine'];

$data_contenir=$contenirdb->readClasse($classe); 
$data_annee =$annee_scolairedb->readA($annee);



 ?>
<span style="width: 50px;">
  <section class="panel" style="margin-top: 30px;">

                  <div class="panel-head">
                
                     <br><br><br>
                  </div>
                  <div class="container-fluid">

                    <div class="row">

                      <div class="col-md-2">
                         <img src="images/téléchargement.jpeg" style="width: 100px;height: 100px;">
                      </div>

                      <div class="col-md-10" style="text-align: center;">
                        <h3><u>institue universitaire et strategique de l'estuaire</u></h3>
                        <h4>estuary academie and strategie institue(iues/insam)</h4>
                        <h5>sous la tutel de l'universite de dschang et de buea</h5>
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

                      
                      <form method="post" action="controler/emploicontroler.php?action=create"> 
                        
                        <input type="submit" value="valider" class="btn btn-success mr-1 mt-3"> 
                        
                        <input type="hidden" name="semaine" value="<?php echo $semaine; ?>">
                          <table class="table table-hover" id="exam">
                               <thead>
                                 <tr>
                                   <th rowspan="2">Jour</th>
                                   <th rowspan="2">horaire</th>
                                   <th colspan="4" id="l">
                                     <?php 

                                        $info_classe=$classedb->read($classe);
                                        echo $info_classe->intitule;
                                      ?>
                                    <input type="hidden" name="idclasse" value="<?=$classe;  ?>">
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
                                 <input type="hidden" name="lundi" value="Lundi">
                               </tr>
                               <tr>
                                 <td>8H-10H</td>
                                 <input type="hidden" name="l1_horaire" value="8H-10H">
                                 <td>
                                   <select class="form-control" name="l1_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l1_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l1_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>10H-12H</td>
                                 <input type="hidden" name="l2_horaire" value="10H-12H">
                                 <td>
                                   <select class="form-control" name="l2_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l2_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l2_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>12H-15H</td>
                                 <input type="hidden" name="l3_horaire" value="12H-15H">
                                 <td>
                                   <select class="form-control" name="l3_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l3_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l3_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>15H-17H</td>
                                 <input type="hidden" name="l4_horaire" value="15H-17H">
                                 <td>
                                   <select class="form-control" name="l4_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l4_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="l4_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               
























                               <tr>
                                 <td rowspan="5">Mardi</td>
                                 <input type="hidden" name="mardi" value="Mardi">
                               </tr>
                               <tr>
                                 <td>8H-10H</td>
                                 <input type="hidden" name="ma1_horaire" value="8H-10H">
                                 <td>
                                   <select class="form-control" name="ma1_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma1_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma1_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>10H-12H</td>
                                 <input type="hidden" name="ma2_horaire" value="10H-12H">
                                 <td>
                                   <select class="form-control" name="ma2_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma2_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma2_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>12H-15H</td>
                                 <input type="hidden" name="ma3_horaire" value="12H-15H">
                                 <td>
                                   <select class="form-control" name="ma3_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma3_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma3_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>15H-17H</td>
                                 <input type="hidden" name="ma4_horaire" value="15H-17H">
                                 <td>
                                   <select class="form-control" name="ma4_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma4_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ma4_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>











                               <tr>
                                 <td rowspan="5">Mercredi</td>
                                 <input type="hidden" name="mercredi" value="Mercredi">
                               </tr>
                               <tr>
                                 <td>8H-10H</td>
                                 <input type="hidden" name="me1_horaire" value="8H-10H">
                                 <td>
                                   <select class="form-control" name="me1_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me1_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me1_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>10H-12H</td>
                                 <input type="hidden" name="me2_horaire" value="10H-12H">
                                 <td>
                                   <select class="form-control" name="me2_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me2_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me2_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>12H-15H</td>
                                 <input type="hidden" name="me3_horaire" value="12H-15H">
                                 <td>
                                   <select class="form-control" name="me3_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me3_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me3_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>15H-17H</td>
                                 <input type="hidden" name="me4_horaire" value="15H-17H">
                                 <td>
                                   <select class="form-control" name="me4_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me4_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="me4_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>










                               <tr>
                                 <td rowspan="5">Jeudi</td>
                                 <input type="hidden" name="jeudi" value="Jeudi">
                               </tr>
                               <tr>
                                 <td>8H-10H</td>
                                 <input type="hidden" name="je1_horaire" value="8H-10H">
                                 <td>
                                   <select class="form-control" name="je1_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je1_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je1_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>10H-12H</td>
                                 <input type="hidden" name="je2_horaire" value="10H-12H">
                                 <td>
                                   <select class="form-control" name="je2_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je2_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je2_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>12H-15H</td>
                                 <input type="hidden" name="je3_horaire" value="12H-15H">
                                 <td>
                                   <select class="form-control" name="je3_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je3_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je3_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>15H-17H</td>
                                 <input type="hidden" name="je4_horaire" value="15H-17H">
                                 <td>
                                   <select class="form-control" name="je4_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je4_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="je4_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>












                                <tr>
                                 <td rowspan="5">Vendredi</td>
                                 <input type="hidden" name="vendredi" value="Vendredi">
                               </tr>
                               <tr>
                                 <td>8H-10H</td>
                                 <input type="hidden" name="ve1_horaire" value="8H-10H">
                                 <td>
                                   <select class="form-control" name="ve1_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve1_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve1_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>10H-12H</td>
                                 <input type="hidden" name="ve2_horaire" value="10H-12H">
                                 <td>
                                   <select class="form-control" name="ve2_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve2_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve2_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>12H-15H</td>
                                 <input type="hidden" name="ve3_horaire" value="12H-15H">
                                 <td>
                                   <select class="form-control" name="ve3_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve3_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve3_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>15H-17H</td>
                                 <input type="hidden" name="ve4_horaire" value="15H-17H">
                                 <td>
                                   <select class="form-control" name="ve4_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve4_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="ve4_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>








                               <tr>
                                 <td rowspan="5">Samedi</td>
                                 <input type="hidden" name="samedi" value="Samedi">
                               </tr>
                               <tr>
                                 <td>8H-10H</td>
                                 <input type="hidden" name="se1_horaire" value="8H-10H">
                                 <td>
                                   <select class="form-control" name="se1_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se1_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se1_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>10H-12H</td>
                                 <input type="hidden" name="se2_horaire" value="10H-12H">
                                 <td>
                                   <select class="form-control" name="se2_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se2_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se2_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>12H-15H</td>
                                 <input type="hidden" name="se3_horaire" value="12H-15H">
                                 <td>
                                   <select class="form-control" name="se3_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se3_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se3_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>15H-17H</td>
                                 <input type="hidden" name="se4_horaire" value="15H-17H">
                                 <td>
                                   <select class="form-control" name="se4_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se4_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="se4_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>





                               <tr>
                                 <td rowspan="5">Dimanche</td>
                                 <input type="hidden" name="dimanche" value="Dimanche">
                               </tr>
                               <tr>
                                 <td>8H-10H</td>
                                 <input type="hidden" name="de1_horaire" value="8H-10H">
                                 <td>
                                   <select class="form-control" name="de1_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de1_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de1_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>10H-12H</td>
                                 <input type="hidden" name="de2_horaire" value="10H-12H">
                                 <td>
                                   <select class="form-control" name="de2_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de2_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de2_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>12H-15H</td>
                                 <input type="hidden" name="de3_horaire" value="12H-15H">
                                 <td>
                                   <select class="form-control" name="de3_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de3_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de3_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               <tr>
                                 <td>15H-17H</td>
                                 <input type="hidden" name="de4_horaire" value="15H-17H">
                                 <td>
                                   <select class="form-control" name="de4_matiere">
                                    <?php 
                                        foreach ($data_contenir as $ligne ) {
                                          $data=$matieredb->read($ligne->id_matiere);
                                     ?>
                                     <option value="<?=$data->intitule;  ?>"><?=$data->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de4_enseignant">
                                    <?php 
                                        foreach ($data_annee as $lignes ) {
                                          $datas=$enseignantdb->read($lignes->id_enseignant);
                                     ?>
                                     <option value="<?=$datas->nom;  ?>"><?=$datas->nom;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                                 <td>
                                    <select class="form-control" name="de4_idsalle">
                                    <?php 
                                        $data_salle=$salledb->readAll();
                                        foreach ($data_salle as $lignes ) {
                                         
                                     ?>
                                     <option value="<?=$lignes->id_salle;  ?>"><?=$lignes->intitule;  ?></option>
                                    <?php 
                                          }
                                     ?>
                                   </select>
                                 </td>
                              
                               </tr>
                               




















                              
                              
                             </tbody>
                     </table>           

                </form>

                  </div>
                </section>  
</span>