<?php 
require  '../model/Annee_scolairedb.php';
require  '../model/Matieredb.php';
require  '../model/Enseignantdb.php';

$annee_scolairedb= new Annee_scolairedb();
$matieredb= new Matieredb();
$enseignantdb= new Enseignantdb();

$action =$_GET['action'];

if ($action=='create') {
  $intitule=$_POST['intitule'];
  $intitule_matiere=$_POST['intitule_matiere'];
  $intitule_enseignant=$_POST['intitule_enseignant'];

  $data_matiere=$matieredb->readId($intitule_matiere);
  $data_enseignant=$enseignantdb->readId($intitule_enseignant);

  $idmatiere=$data_matiere->id_matiere;
  $idenseignant=$data_enseignant->id_enseignant;


  $annee_scolairedb->create($idmatiere,$idenseignant,$intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Les configurations ont ete Ajouter avec sucess'
   );
   header('Location:../app.php?view=annee_scolaire');
   
	
	
}

if ($action=='update') {
	$idannee=$_POST['idannee'];
  $intitule=$_POST['intitule'];
  $intitule_matiere=$_POST['intitule_matiere'];
  $intitule_enseignant=$_POST['intitule_enseignant'];

  $data_matiere=$matieredb->readId($intitule_matiere);
  $data_enseignant=$enseignantdb->readId($intitule_enseignant);

  $idmatiere=$data_matiere->id_matiere;
  $idenseignant=$data_enseignant->id_enseignant;


  $annee_scolairedb->update($idmatiere,$idenseignant,$intitule,$idannee);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Les configurations ont ete modifier avec sucess'
   );
   header('Location:../app.php?view=annee_scolaire');
   
}

if ($action=='delete') {
  $idannee=$_POST['idannee'];


  $annee_scolairedb->delete($idannee);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Les configurations ont ete supprimer avec sucess'
   );
   header('Location:../app.php?view=annee_scolaire');
   
}


 ?>