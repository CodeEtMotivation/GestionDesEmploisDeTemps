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
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>essai</title>
    <link rel="stylesheet" type="text/css" href="css/login2.css">
</head>
<body>

<div class="container">
        <div class="app_logo">
            <img src="images/icon.PNG" style="border-radius: 6px;width: 50px;">
            <span id="TimeSoft">Time Soft</span>
        </div>

        <input type="checkbox" id="retourner">

        <div class="cover">
            <div class="front">
                <img src="images/téléchargement.jpeg" alt="mon image">
                <div class="text">
                    <span class="text-1">mon texte sera ecrit plus tard <br> voiyons ce que ca donne</span>
                    <span class="text-2">mon texte sera ecrit plus tard </span>
                </div>
            </div>
            <div class="back">
                <img src="images/img_avatar3.png" alt="">
                <div class="text">
                    <span class="text-1">mon texte sera ecrit plus tard <br> voiyons ce que ca donne</span>
                    <span class="text-2">mon texte sera ecrit plus tard </span>
                </div>
            </div>
        </div>

         <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Se Connecter</div>
                    <form id="form_connexion">
                        <div class="input-boxes">
                            <div class="input-box"><i class="fas fa-user"></i>
                                <select id="choix">
                                    <option>etudiant</option>
                                    <option>prof</option>
                                </select>
                            </div>
                                <div class="text">
                                    <div class=" button input-box" id="re">
                                        <span id="ch" style="padding: 15px;">

                                            <span id="firstdeclanche">VALIDER</span>

                                            <label id="declanche" for="retourner">inscrivez </label>
                                        </span>
                                    </div>
                                   
                                </div>
                        </div>
                    </form>
                </div>
                <div class="signup-form">
                <div class="app_logo">
                    <a href="#" class="logo">
                    <i class="fas fa-school"></i><span> School</span> </a>
                </div>
                    <div class="title">INSCRIPTION</div>


                    <form method="post" action="controler/connexionControler.php?form=administration" id="page2">
                        <div class="input-boxes">
                            <div class="input-box"><i class="fas fa-user"></i>
                                <input type="text" name="login" placeholder="Entrer votre login" required>
                            </div>
                            <div class="input-box"><i class="fas fa-envelope"></i>
                                <input type="text" name="password" placeholder="Entrer votre password" required>
                            </div>
                            <div class="button input-box">
                                    <input type="submit"value="s'inscrire" >
                            </div>
                                <div class="text sign-up-text">Vous avez deja un compte?<label for="retourner">connectez vous </label></div>
                        </div>
                    </form>

                    <form action="" id="page3" style="display: none;">
                        <div class="input-boxes">
                            <div class="input-box"><i class="fas fa-user"></i>
                                <select>
                                    <option>gl</option>
                                    <option>gsi</option>
                                </select>
                            </div>
                            <div class="input-box"><i class="fas fa-envelope"></i>
                                <select>
                                    <option>niveau 1</option>
                                    <option>niveau 2</option>
                                </select>
                            </div>
                            <div class="button input-box">
                                    <input type="submit" value="se connecter">
                            </div>
                                <div class="text sign-up-text">Voulez vous retourner?
                                    <label for="retourner">clique ici</label>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>







<script type="text/javascript" src="js/login.js"></script>

</body>
</html>