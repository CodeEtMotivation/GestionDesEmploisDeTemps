<?php 


require  '../model/Niveaudb.php';


$niveaudb=new Niveaudb();


$action =$_GET['action'];


if ($action=='create') {
  $intitule=$_POST['intitule'];


  $niveaudb->create($intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Les niveau ont ete Ajouter avec sucess'
   );
   header('Location:../app.php?view=niveau');
   
	
	
}

if ($action=='update') {
	$idniveau=$_POST['idniveau'];
  $intitule=$_POST['intitule'];
 


  $niveaudb->update($intitule,$idniveau);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Les niveaus ont ete modifier avec sucess'
   );
   header('Location:../app.php?view=niveau');
   
}

if ($action=='delete') {
  $idniveau=$_POST['idniveau'];


  $niveaudb->delete($idniveau);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'La niveau a ete supprimer avec sucess'
   );
   header('Location:../app.php?view=niveau');
   
}


 ?>