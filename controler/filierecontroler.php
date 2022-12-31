<?php 
require_once '../model/Filieredb.php';
$filieredb=new Filieredb();

$action =$_GET['action'];

if ($action=='create') {
   if (empty($_POST['intitule'])) {
        header('Location:../app.php?view=filiere_create&message=Vous Devez Precisez intitule');
   }else{
        $intitule=$_POST['intitule'];
        $filieredb->create($intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Filiere Ajouter avec sucess'
   );
   header('Location:../app.php?view=filiere');
   }
	
	
}

if ($action=='update') {
	
        $intitule=$_POST['intitule'];
        $idfiliere=$_POST['idfiliere'];
        $filieredb->update($idfiliere,$intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Filiere Modifier avec sucess'
   );
   header('Location:../app.php?view=filiere');
   
}

if ($action=='delete') {
	$idfiliere=$_POST['idfiliere'];

	$filieredb->delete($idfiliere);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'filiere supprimer avec success'
   );
   header('Location:../app.php?view=filiere');
}


 ?>