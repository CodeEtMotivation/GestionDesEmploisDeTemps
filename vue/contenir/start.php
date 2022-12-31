<?php 

$donnee=$_GET['donnee'];

$data_contenir=$contenirdb->readClasse($donnee);  
 ?>
<br><br><br>       
<span style="width: 02px;">
    <section class="panel" style="margin-top: 10px;">  
                  <div class="float-right">
                      <a href="" class="btn btn-success">
                        Enregistrer
                      </a>
                  </div>
                  <div class="panel-body table-responsive">
                      <form method="post" action="controler/contenircontroler.php?action=start">
                       
                       <div class="container-fluid">
                         <div class="row">

                           <div class="col-md-6">
                              <h1>CLASSE:</h1>
                              <br>

                              <?php 

                                $dat=$classedb->read($donnee);
                               ?>
                              <h3><?=$dat->intitule;  ?></h3>
                           </div>
                           <div class="col-md-6">
                             <h1>MATIERES:</h1>
                             <br>

                             <?php 
                                  foreach ($data_contenir as $ligne ) {
                                  $data=$matieredb->read($ligne->id_matiere);

                              ?>
                             <h3><?=$data->intitule;  ?></h3>
                             
                             <?php 

                                  }

                              ?>
                           </div>

                         </div>
                       </div>
                       
                      </form>          
                  </div>
                </section>  
</span>