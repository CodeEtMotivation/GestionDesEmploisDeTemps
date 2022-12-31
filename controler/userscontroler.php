<?php 
require_once '../model/Usersdb.php';

$usersdb=new Usersdb();

$action =$_GET['action'];

if ($action=='create') {
   if (empty($_POST['intitule'])) {
        header('Location:../app.php?view=niveau_create&message=Vous Devez Precisez intitule');
   }else{
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $role=$_POST['role'];

        $usersdb->create($nom,$prenom,$login,$password,$role);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Utilisateurs Ajouter avec sucess'
   );
   header('Location:../app.php?view=acceuil');
   }
	
	
}

if ($action=='update') {
	$iduser=$_POST['iduser'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    $usersdb->update($nom,$prenom,$login,$password,$role,$iduser);



   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Specialite Modifier avec sucess'
   );
   header('Location:../app.php?view=acceuil');
   
}

if ($action=='delete') {
	$idspecialite=$_POST['idspecialite'];
  
	$specialitedb->delete($idspecialite);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'specialite supprimer avec success'
   );
   header('Location:../app.php?view=specialite');
}


 ?>