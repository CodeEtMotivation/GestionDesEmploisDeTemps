<?php 
require_once '../model/Matieredb.php';

$matieredb=new Matieredb();

$action =$_GET['action'];

if ($action=='create') {
   
  $intitule=$_POST['intitule'];
  $matieredb->create($intitule);



   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Matiere Ajouter avec sucess'
   );
   header('Location:../app.php?view=matiere');
   
	
	
}

if ($action=='update') {
	
        $idmatiere=$_POST['idmatiere'];
        $intitule=$_POST['intitule'];
        $matieredb->update($intitule,$idmatiere);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Matiere Modifier avec sucess'
   );
   header('Location:../app.php?view=matiere');
   
}

if ($action=='delete') {
	$idmatiere=$_POST['idmatiere'];
  
	$matieredb->delete($idmatiere);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Matiere supprimer avec success'
   );
   header('Location:../app.php?view=matiere');
}


 ?>