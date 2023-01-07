<?php 
session_start();
//gestion des erreurs
if(isset($_SESSION['erreur']) ==true ){
   $error =$_SESSION['erreur'];

   echo '<script type="text/javascript">';
   echo 'alert("'.$error['message'].'")';
   echo '</script>';
   unset($_SESSION['erreur']);
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
<body style="background: #1876f2;">
 

         <div class="container">
        <div class="row text-center ">
            <div class="col-md-12" style="color: #fff;">
                <br /><br />
                <img src="images/téléchargement.jpeg" width="100" height="100" style="border-radius: 50px;">
                <h2>Vous Souhaite Bienvenue</h2>
               
                <h5>Se Connecter En Tant Que : </h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default" style="border-radius: 5px;">
                            <div class="panel-heading">
                                <img src="images/icon.PNG" style="border-radius: 6px;width: 50px;">
                                <strong>Time Soft</strong> 
                            </div>
                            <div class="panel-body">
                                <!-- <form role="form" id="form1">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <select name="" class="form-control" id="statut">
                                              <option>etudiants</option>
                                              <option>administration IUEs/INSAM</option>
                                            </select>
                                        </div>
                                     
                                  
                                       <span href="" class="btn btn-primary btn-lg" id="declanche" style="width: 100%;">Login Now</span>
                                     
                                   
                                    </form>

                                    <form role="form" id="form2" action="controler/connexionControler.php?form=etudiants" method="post" style="display: none;display: all 3s;transition: 5s; ">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <select name="libelle_specialite" class="form-control">
                                              <option>gl</option>
                                              <option>gs</option>
                                            </select>
                                      </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <select name="libelle_niveau" class="form-control">
                                              <option>niveau 2</option>
                                              <option>niveau 2</option>
                                            </select>
                                      </div>
                                     
                                     <input type="submit" class="btn btn-primary btn-lg" style="width: 100%;" value="Valider">
                                   
                                    </form> -->

                                    <form role="form" id="form3" action="controler/connexionControler.php?form=administration" method="post" style="display: inline;">
                                       <br />
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" name="login" placeholder="entrer votre login" class="form-control" required/>
                                      </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" placeholder="entrer votre password" class="form-control" required/>
                                      </div>
                                     
                                     <input type="submit" class="btn btn-primary btn-lg" style="width: 100%;" value="Se Connecter">
                                   
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
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
  form1=document.querySelector("#form1");
  form2=document.querySelector("#form2");
  form3=document.querySelector("#form3");
  statut=document.querySelector("#statut");
  declanche=document.querySelector("#declanche");

  declanche.onclick=function(){
    if (statut.value == "etudiants") {
    form1.style.display="none";
    form2.style.display="inline";
      }else{
    form1.style.display="none";
    form3.style.display="inline";    
      }
  }


</script>

</body>
</html>