 <?php 



require "controler/controler.php";

  

 //gestion erreurs
 if(isset($_SESSION['erreur']) ==true ){
    $error =$_SESSION['erreur'];

    echo '<script type="text/javascript">';
    echo 'alert("'.$error['message'].'")';
    echo '</script>';
    unset($_SESSION['erreur']);
 }

 //gestion du profil
 if(isset($_SESSION['profil']) !=true){
    $_SESSION['erreur']=array(
       'type' => 'warning',
       'message' => 'connecter vous'
    );
    header('Location:index.php');

 }

 //gestion de la vues
 $view =null; //recupere la vue qu'on veux afficher
 $active1=null;
 if(isset($_GET['view']) == true){
    $view=$_GET['view'];

    if($view == "acceuil"){
       $active1="active";
    }elseif ($view == "emploi"){
       $active2="active";
    }elseif ($view == "classe"){
       $active3="active";
    }elseif ($view == "salle"){
       $active4="active";
    }elseif ($view == "enseignant"){
       $active5="active";
    }elseif ($view == "annee_scolaire"){
       $active6="active";
    }elseif ($view == "contenir"){
       $active7="active";
    }else{
       $active1="active";
    }
   
 }

  ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
   <meta name="author" content="NGAHAMI ARMEL" />
   <meta name="description" content="GESTION DES EMPLOIS DE TEMPS" />
   <title>TimeSoft</title>
   <link rel="icon" type="image/x-icon" href="images/icon.PNG" />
   <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/fonts/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/jquery-ui-1.12.1/jquery-ui.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/jquery-ui-themes-1.12.1/themes/flick/jquery-ui.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
   <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
   <link href="dist/css/timeline.css" rel="stylesheet">
   <link href="dist/css/sb-admin-2.css" rel="stylesheet">
   <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
   <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="css/app.css" />
</head>
<body>
 
  

  <input type="checkbox" id="nav-toggle">
  <div class="sidebars">
     <div class="sidebars-brand">
      <h2>
        <img src="images/icon.PNG" style="border-radius: 6px;width: 50px;">
         <span id="TimeSoft">Time Soft</span>
        
      </h2>
    </div>

    <div class="menu-bar">
    <div class="menu">
      <ul class="menu-links">
        <li class="nav-link">
          <a href="app.php?view=acceuil" class="<?php echo $active1;  ?>">
            <i class="fas fa-home icon "></i>
            <span class="text nav-text">
              Acceuil
            </span>
          </a>
        </li>
        <li class="nav-link">
          <a href="app.php?view=emploi" class="<?php echo $active2;  ?>">
            <i class="fas fa-list-alt icon "></i>
            <span class="text nav-text">
              Emploi de temps
            </span>
          </a>
        </li>
         <li class="nav-link">
          <a href="app.php?view=classe" class="<?php echo $active3;  ?>">
            <i class="fas fa-table icon "></i>
            <span class="text nav-text">
              Classe
            </span>
          </a>
        </li>
        <li class="nav-link">
          <a href="app.php?view=salle" class="<?php echo $active4;  ?>">
            <i class="fa fa-university fa-5x icon"></i>
            <span class="text nav-text">
              Salle
            </span>
          </a>
        </li>
        <li class="nav-link">
          <a href="app.php?view=enseignant" class="<?php echo $active5;  ?>">
            <i class="fa fa-user icon "></i>
            <span class="text nav-text">
              Enseignant
            </span>
          </a>
        </li>
        <li class="nav-link">
          <a href="app.php?view=annee_scolaire" class="<?php echo $active6;  ?>">
            <i class="fa fa-calendar icon "></i>
            <span class="text nav-text">
              Annee_scolaire
            </span>
          </a>
        </li>
        <li class="nav-link">
          <a href="app.php?view=contenir" class="<?php echo $active7;  ?>">
            <i class="fa fa-calendar icon "></i>
            <span class="text nav-text">
              class_Matiere
            </span>
          </a>
        </li>
      </ul>
    </div>
    <div class="bottom-content">
      <li class="nav-link">
          <a href="controler/deconnexionControler.php">
            <i class="fas fa-sign-out-alt icon"></i>
            <span class="text nav-text">
              Deconnexion
            </span>
          </a>
      </li>
      <li class="mode">
        <div class="moon-sum">
          <i class="fas fa-moon icon moon"></i>
          <i class="fas fa-sun icon sun"></i>
        </div>
        <span class="mode-text text">
          Dark mode 
        </span>
        <div class="toggle-switch">
          <span class="switch"></span>
          
        </div>
      </li>
    </div>
  </div>
  </div>

  <div class="main-content">
    <header>
      <h2>
        <label for="nav-toggle">
          <span class="fas fa-bars"></span>
        </label>
        <span id="dashboard">Dashboard</span>
      </h2>

      <div class="sm-st clearfix" style="background: pink;width: 90px;position: absolute;
right:  285px;top: 50px; width: 600px;padding: 20px;border-radius: 3px;animation: slideInDown 1s;display: none;">
              <span>
                  djdjdxjdjfjdjdjfjdfjjdfjdjf
              </span>
              <span class="float-right">
                    xx
              </span>
      </div>
      
      <div class="user-wrapper">
        <img src="images/téléchargement.jpeg" width="40px" height="40px">
        <div>
          <h4>IUEs/INSAM</h4>
          <small>Dr.Foyet</small>
        </div>
      </div>
  </header>
    <main>
        <?php 
            if($view == "acceuil"){
                 include "vue/dashboard.php";
            }elseif ($view == null) {
                 include "vue/dashboard.php";
            }elseif ($view == "emploi") {
                 include "vue/emploi/index.php";
            }elseif ($view == "emploi_create") {
                 include "vue/emploi/create.php";
            }elseif ($view == "emploi_update") {
                 include "vue/emploi/update.php";
            }elseif ($view == "emploi_delete") {
                 include "vue/emploi/delete.php";
            }elseif ($view == "emploi_start") {
                 include "vue/emploi/start.php";
            }elseif ($view == "emploi_startA") {
                 include "vue/emploi/startA.php";
            }elseif ($view == "matiere") {
                 include "vue/matiere/index.php";
            }elseif ($view == "matiere_create") {
                 include "vue/matiere/create.php";
            }elseif ($view == "matiere_update") {
                 include "vue/matiere/update.php";
            }elseif ($view == "matiere_delete") {
                 include "vue/matiere/delete.php";
            }elseif ($view == "enseignant") {
                 include "vue/enseignant/index.php";
            }elseif ($view == "enseignant_create") {
                 include "vue/enseignant/create.php";
            }elseif ($view == "enseignant_update") {
                 include "vue/enseignant/update.php";
            }elseif ($view == "enseignant_delete") {
                 include "vue/enseignant/delete.php";
            }elseif ($view == "annee_scolaire") {
                 include "vue/annee_scolaire/index.php";
            }elseif ($view == "annee_scolaire_create") {
                 include "vue/annee_scolaire/create.php";
            }elseif ($view == "annee_scolaire_update") {
                 include "vue/annee_scolaire/update.php";
            }elseif ($view == "annee_scolaire_delete") {
                 include "vue/annee_scolaire/delete.php";
            }elseif ($view == "user") {
                 include "vue/user/index.php";
            }elseif ($view == "user_create") {
                 include "vue/user/create.php";
            }elseif ($view == "user_update") {
                 include "vue/user/update.php";
            }elseif ($view == "filiere") {
                 include "vue/filiere/index.php";
            }elseif ($view == "filiere_create") {
                 include "vue/filiere/create.php";
            }elseif ($view == "filiere_update") {
                 include "vue/filiere/update.php";
            }elseif ($view == "filiere_delete") {
                 include "vue/filiere/delete.php";
            }elseif ($view == "niveau") {
                 include "vue/niveau/index.php";
            }elseif ($view == "niveau_create") {
                 include "vue/niveau/create.php";
            }elseif ($view == "niveau_update") {
                 include "vue/niveau/update.php";
            }elseif ($view == "niveau_delete") {
                 include "vue/niveau/delete.php";
            }elseif ($view == "specialite") {
                 include "vue/specialite/index.php";
            }elseif ($view == "specialite_create") {
                 include "vue/specialite/create.php";
            }elseif ($view == "specialite_update") {
                 include "vue/specialite/update.php";
            }elseif ($view == "specialite_delete") {
                 include "vue/specialite/delete.php";
            }elseif ($view == "salle") {
                 include "vue/salle/index.php";
            }elseif ($view == "salle_create") {
                 include "vue/salle/create.php";
            }elseif ($view == "salle_update") {
                 include "vue/salle/update.php";
            }elseif ($view == "salle_delete") {
                 include "vue/salle/delete.php";
            }elseif ($view == "classe") {
                include "vue/classe/index.php";
            }elseif ($view == "classe_create") {
                include "vue/classe/create.php";
            }elseif ($view == "classe_update") {
                include "vue/classe/update.php";
            }elseif ($view == "classe_delete") {
                include "vue/classe/delete.php";
            }elseif ($view == "contenir") {
                include "vue/contenir/index.php";
            }elseif ($view == "contenir_create") {
                include "vue/contenir/create.php";
            }elseif ($view == "contenir_update") {
                include "vue/contenir/update.php";
            }elseif ($view == "contenir_delete") {
                include "vue/contenir/delete.php";
            }elseif ($view == "contenir_start") {
                include "vue/contenir/start.php";
            }

            


             ?>
      
    </main>
  </div>
   
    
      
  
  

<script type="text/javascript" src="vendor/js/jquery.min.js"></script>
<script type="text/javascript" src="vendor/js/popper.min.js"></script>
<script type="text/javascript" src="vendor/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/fonts/js/all.js"></script>
<script type="text/javascript" src="vendor/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="bower_components/raphael/raphael-min.js"></script>
<script src="bower_components/morrisjs/morris.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
    $('#example2').DataTable();
    $('#example3').DataTable();
    $('#example4').DataTable();
    $('#example5').DataTable();
    $('#example6').DataTable();
    $('.fg').DataTable();
  } );
</script>
  <script>
$(document).ready(function(){

  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#re #rech").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
    } );

function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
</body>
</html>