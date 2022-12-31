<?php 
require  '../model/Classedb.php';
require  '../model/Specialitedb.php';
require  '../model/Niveaudb.php';

$classedb= new Classedb();
$specialitedb= new Specialitedb();
$niveaudb= new Niveaudb();

$action =$_GET['action'];

if ($action=='create') {
  $intitule=$_POST['intitule'];
  $intitule_specialite=$_POST['intitule_specialite'];
  $intitule_niveau=$_POST['intitule_niveau'];

  $data_specialite=$specialitedb->readId($intitule_specialite);
  $data_niveau=$niveaudb->readId($intitule_niveau);

  $idspecialite=$data_specialite->id_specialite;
  $idniveau=$data_niveau->id_niveau;


  $classedb->create($intitule,$idspecialite,$idniveau);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Classe Ajouter avec sucess'
   );
   header('Location:../app.php?view=classe');
   
	
	
}

if ($action=='update') {
  $idclasse=$_POST['idclasse'];
	$intitule=$_POST['intitule'];
  $intitule_specialite=$_POST['intitule_specialite'];
  $intitule_niveau=$_POST['intitule_niveau'];

  $data_specialite=$specialitedb->readId($intitule_specialite);
  $data_niveau=$niveaudb->readId($intitule_niveau);

  $idspecialite=$data_specialite->id_specialite;
  $idniveau=$data_niveau->id_niveau;


  $classedb->update($intitule,$idspecialite,$idniveau,$idclasse);
   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'classe modifier avec sucess'
   );
   header('Location:../app.php?view=classe');
   
}

if ($action=='delete') {
  $idclasse=$_POST['idclasse'];


  $classedb->delete($idclasse);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'classe supprimer avec sucess'
   );
   header('Location:../app.php?view=classe');
   
}


 ?>