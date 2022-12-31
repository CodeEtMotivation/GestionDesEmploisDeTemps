<?php 
require_once '../model/Specialitedb.php';
require  '../model/Filieredb.php';
$specialitedb=new Specialitedb();
$filieredb=new Filieredb();

$action =$_GET['action'];

if ($action=='create') {
   if (empty($_POST['intitule'])) {
        header('Location:../app.php?view=niveau_create&message=Vous Devez Precisez intitule');
   }else{
        $intitule=$_POST['intitule'];
        $intitule_filiere=$_POST['intitule_filiere'];

        $data_filiere=$filieredb->readId($intitule_filiere);

        $idfiliere=$data_filiere->id_filiere;

        $specialitedb->create($idfiliere,$intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Specialite Ajouter avec sucess'
   );
   header('Location:../app.php?view=specialite');
   }
	
	
}

if ($action=='update') {
	
        $idspecialite=$_POST['idspecialite'];
        $intitule=$_POST['intitule'];
        $intitule_filiere=$_POST['intitule_filiere'];

        $data_filiere=$filieredb->readId($intitule_filiere);

        $idfiliere=$data_filiere->id_filiere;

        $specialitedb->update($idfiliere,$intitule,$idspecialite);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Specialite Modifier avec sucess'
   );
   header('Location:../app.php?view=specialite');
   
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