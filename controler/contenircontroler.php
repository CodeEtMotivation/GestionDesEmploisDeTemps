<?php 
require  '../model/contenirdb.php';
require  '../model/Matieredb.php';
require  '../model/Classedb.php';

$contenirdb= new Contenirdb();
$classedb= new Classedb();
$matieredb= new Matieredb();


$action =$_GET['action'];
if ($action == 'start') {
       $intitule=$_POST['classe_intitule'];
       $data_classe=$classedb->readId($intitule);
       
       header('Location:../app.php?view=contenir_start&donnee='.$data_classe->id_classe );


}

if ($action=='create') {
  $classe_intitule=$_POST['classe_intitule'];
  $matiere_intitule=$_POST['matiere_intitule'];

  



  $contenirdb->create($classe_intitule,$matiere_intitule);


   $_SESSION['erreur']=array(
      'type' => 'information',
      'message' => 'Les configurations ont ete Ajouter avec sucess'
   );
   header('Location:../app.php?view=contenir');
   
	
	
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