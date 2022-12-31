<?php 
require_once '../model/Salledb.php';
$salledb=new salledb();

$action =$_GET['action'];

if ($action=='create') {
   
  $intitule=$_POST['intitule'];
  $salledb->create($intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Salle Ajouter avec sucess'
   );
   header('Location:../app.php?view=salle');
   
	
	
}

if ($action=='update') {
	
        $idsalle=$_POST['idsalle'];
        $intitule=$_POST['intitule'];
        $salledb->update($idsalle,$intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Salle Modifier avec sucess'
   );
   header('Location:../app.php?view=salle');
   
}

if ($action=='delete') {
	$idsalle=$_POST['idsalle'];
  
	$salledb->delete($idsalle);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Salle supprimer avec success'
   );
   header('Location:../app.php?view=salle');
}


 ?>