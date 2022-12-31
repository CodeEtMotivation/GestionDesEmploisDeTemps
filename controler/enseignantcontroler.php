<?php 
require_once '../model/Enseignantdb.php';
$enseignantdb=new Enseignantdb();

$action =$_GET['action'];

if ($action=='create') {
   
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $sexe=$_POST['sexe'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        $enseignantdb->create($nom,$prenom,$sexe,$telephone,$email);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Enseignant Ajouter avec sucess'
   );
   header('Location:../app.php?view=enseignant');
   
	
	
}

if ($action=='update') {
	
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $sexe=$_POST['sexe'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        $idenseignant=$_POST['idenseignant'];
        $enseignantdb->update($nom,$prenom,$sexe,$telephone,$email,$idenseignant);
        


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Enseignant Modifier avec sucess'
   );
   header('Location:../app.php?view=enseignant');
   
}

if ($action=='delete') {
	$idenseignant=$_POST['idenseignant'];

	$enseignantdb->delete($idenseignant);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Enseignant supprimer avec success'
   );
   header('Location:../app.php?view=enseignant');
}


 ?>