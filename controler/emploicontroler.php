<?php 
require  '../model/Filieredb.php';
require  '../model/Niveaudb.php';
require  '../model/Specialitedb.php';
require  '../model/Salledb.php';
require  '../model/Matieredb.php';
require  '../model/Enseignantdb.php';
require  '../model/Annee_scolairedb.php';
require  '../model/Usersdb.php';
require  '../model/Contenirdb.php';
require  '../model/Classedb.php';
require  '../model/Emploidb.php';

$filieredb=new Filieredb();
$niveaudb=new Niveaudb();
$specialitedb=new Specialitedb();
$salledb= new Salledb();
$matieredb= new Matieredb();
$enseignantdb= new Enseignantdb();
$annee_scolairedb= new Annee_scolairedb();
$usersdb= new Usersdb();
$contenirdb= new Contenirdb();
$classedb= new Classedb();
$emploidb= new Emploidb();



$action =$_GET['action'];
if ($action == 'start') {
       $intitule=$_POST['classe_intitule'];
       $intitule_annee=$_POST['annee_scolaire'];
       $semaine=$_POST['semaine'];
      
       $annee =$annee_scolairedb->readA($intitule_annee);

	if ($annee == false) {
		$_SESSION['erreur']=array(
		'type' => 'danger',
		'message' => 'annee faux'
	    );
	    header('Location:../app.php?view=emploi');
	}else{

		 $data_classe=$classedb->readId($intitule); 
       
       header('Location:../app.php?view=emploi_create&donnee='.$data_classe->id_classe.'&annee='.$intitule_annee.'&semaine='.$semaine);
	}


}
if ($action == 'startA') {
       $intitule=$_POST['classe_intitule'];
       $semaine=$_POST['semaine'];
       $data_semaine=$emploidb->readSemaine($semaine);

       if ($data_semaine == false) {
              

                   $erreur="semaine fausse";

             
              header('Location:../app.php?view=emploi&erreur='.$erreur);
       }else{
             $data_classe=$classedb->readId($intitule);

        header('Location:../app.php?view=emploi_startA&donnee='.$data_classe->id_classe.'&semaine='.$semaine); 
       }

       



}
if ($action == 'create') {

       $semaine=$_POST['semaine'];
       $idclasse=$_POST['idclasse'];
       $l1=$_POST['lundi'];
       $l2=$_POST['mardi'];
       $l3=$_POST['mercredi'];
       $l4=$_POST['jeudi'];
       $l5=$_POST['vendredi'];
       $l6=$_POST['samedi'];
       $l7=$_POST['dimanche'];

       if ($l1=="Lundi") {
       //on rcuprere la premiere ligne
              $horaire1=$_POST['l1_horaire'];
              $matiere1=$_POST['l1_matiere'];
              $enseignant1=$_POST['l1_enseignant'];
              $idsalle1=$_POST['l1_idsalle'];
              $emploidb->create($semaine,$l1,$horaire1,$idsalle1,$idclasse,1,$matiere1,$enseignant1);
       //on rcuprere la deuxieme ligne
              $horaire2=$_POST['l2_horaire'];
              $matiere2=$_POST['l2_matiere'];
              $enseignant2=$_POST['l2_enseignant'];
              $idsalle2=$_POST['l2_idsalle'];
              $emploidb->create($semaine,$l1,$horaire2,$idsalle2,$idclasse,1,$matiere2,$enseignant2);
       //on rcuprere la premiere ligne
              $horaire3=$_POST['l3_horaire'];
              $matiere3=$_POST['l3_matiere'];
              $enseignant3=$_POST['l3_enseignant'];
              $idsalle3=$_POST['l3_idsalle'];
              $emploidb->create($semaine,$l1,$horaire3,$idsalle3,$idclasse,1,$matiere3,$enseignant3);
       //on rcuprere la premiere ligne
              $horaire4=$_POST['l4_horaire'];
              $matiere4=$_POST['l4_matiere'];
              $enseignant4=$_POST['l4_enseignant'];
              $idsalle4=$_POST['l4_idsalle'];
              $emploidb->create($semaine,$l1,$horaire4,$idsalle4,$idclasse,1,$matiere4,$enseignant4);                     

             
       }

       if ($l2=="Mardi") {
       //on rcuprere la premiere ligne
              $horairema1=$_POST['ma1_horaire'];
              $matierema1=$_POST['ma1_matiere'];
              $enseignantma1=$_POST['ma1_enseignant'];
              $idsallema1=$_POST['ma1_idsalle'];
              $emploidb->create($semaine,$l2,$horairema1,$idsallema1,$idclasse,1,$matierema1,$enseignantma1);
       //on rcuprere la deuxieme ligne
              $horairema2=$_POST['ma2_horaire'];
              $matierema2=$_POST['ma2_matiere'];
              $enseignantma2=$_POST['ma2_enseignant'];
              $idsallema2=$_POST['ma2_idsalle'];
              $emploidb->create($semaine,$l2,$horairema2,$idsallema2,$idclasse,1,$matierema2,$enseignantma2);
       //on rcuprere la premiere ligne
              $horairema3=$_POST['ma3_horaire'];
              $matierema3=$_POST['ma3_matiere'];
              $enseignantma3=$_POST['ma3_enseignant'];
              $idsallema3=$_POST['ma3_idsalle'];
              $emploidb->create($semaine,$l2,$horairema3,$idsallema3,$idclasse,1,$matierema3,$enseignantma3);
       //on rcuprere la premiere ligne
              $horairema4=$_POST['ma4_horaire'];
              $matierema4=$_POST['ma4_matiere'];
              $enseignantma4=$_POST['ma4_enseignant'];
              $idsallema4=$_POST['ma4_idsalle'];
              $emploidb->create($semaine,$l2,$horairema4,$idsallema4,$idclasse,1,$matierema4,$enseignantma4);                     

              
       }

       if ($l3=="Mercredi") {
       //on rcuprere la premiere ligne
              $horaireme1=$_POST['me1_horaire'];
              $matiereme1=$_POST['me1_matiere'];
              $enseignantme1=$_POST['me1_enseignant'];
              $idsalleme1=$_POST['me1_idsalle'];
              $emploidb->create($semaine,$l3,$horaireme1,$idsalleme1,$idclasse,1,$matiereme1,$enseignantme1);
       //on rcuprere la deuxieme ligne
              $horaireme2=$_POST['me2_horaire'];
              $matiereme2=$_POST['me2_matiere'];
              $enseignantme2=$_POST['me2_enseignant'];
              $idsalleme2=$_POST['me2_idsalle'];
              $emploidb->create($semaine,$l3,$horaireme2,$idsalleme2,$idclasse,1,$matiereme2,$enseignantme2);
       //on rcuprere la premiere ligne
              $horaireme3=$_POST['me3_horaire'];
              $matiereme3=$_POST['me3_matiere'];
              $enseignantme3=$_POST['me3_enseignant'];
              $idsalleme3=$_POST['me3_idsalle'];
              $emploidb->create($semaine,$l3,$horaireme3,$idsalleme3,$idclasse,1,$matiereme3,$enseignantme3);
       //on rcuprere la premiere ligne
              $horaireme4=$_POST['me4_horaire'];
              $matiereme4=$_POST['me4_matiere'];
              $enseignantme4=$_POST['me4_enseignant'];
              $idsalleme4=$_POST['me4_idsalle'];
              $emploidb->create($semaine,$l3,$horaireme4,$idsalleme4,$idclasse,1,$matiereme4,$enseignantme4);                     

              
       }

       if ($l4=="Jeudi") {
       //on rcuprere la premiere ligne
              $horaireje1=$_POST['je1_horaire'];
              $matiereje1=$_POST['je1_matiere'];
              $enseignantje1=$_POST['je1_enseignant'];
              $idsalleje1=$_POST['je1_idsalle'];
              $emploidb->create($semaine,$l4,$horaireje1,$idsalleje1,$idclasse,1,$matiereje1,$enseignantje1);
       //on rcuprere la deuxieme ligne
              $horaireje2=$_POST['je2_horaire'];
              $matiereje2=$_POST['je2_matiere'];
              $enseignantje2=$_POST['je2_enseignant'];
              $idsalleje2=$_POST['je2_idsalle'];
              $emploidb->create($semaine,$l4,$horaireje2,$idsalleje2,$idclasse,1,$matiereje2,$enseignantje2);
       //on rcuprere la premiere ligne
              $horaireje3=$_POST['je3_horaire'];
              $matiereje3=$_POST['je3_matiere'];
              $enseignantje3=$_POST['je3_enseignant'];
              $idsalleje3=$_POST['je3_idsalle'];
              $emploidb->create($semaine,$l4,$horaireje3,$idsalleje3,$idclasse,1,$matiereje3,$enseignantje3);
       //on rcuprere la premiere ligne
              $horaireje4=$_POST['je4_horaire'];
              $matiereje4=$_POST['je4_matiere'];
              $enseignantje4=$_POST['je4_enseignant'];
              $idsalleje4=$_POST['je4_idsalle'];
              $emploidb->create($semaine,$l4,$horaireje4,$idsalleje4,$idclasse,1,$matiereje4,$enseignantje4);                     

              
       }



       if ($l5=="Vendredi") {
       //on rcuprere la premiere ligne
              $horaireve1=$_POST['ve1_horaire'];
              $matiereve1=$_POST['ve1_matiere'];
              $enseignantve1=$_POST['ve1_enseignant'];
              $idsalleve1=$_POST['ve1_idsalle'];
              $emploidb->create($semaine,$l5,$horaireve1,$idsalleve1,$idclasse,1,$matiereve1,$enseignantve1);
       //on rcuprere la deuxieme ligne
              $horaireve2=$_POST['ve2_horaire'];
              $matiereve2=$_POST['ve2_matiere'];
              $enseignantve2=$_POST['ve2_enseignant'];
              $idsalleve2=$_POST['ve2_idsalle'];
              $emploidb->create($semaine,$l5,$horaireve2,$idsalleve2,$idclasse,1,$matiereve2,$enseignantve2);
       //on rcuprere la premiere ligne
              $horaireve3=$_POST['ve3_horaire'];
              $matiereve3=$_POST['ve3_matiere'];
              $enseignantve3=$_POST['ve3_enseignant'];
              $idsalleve3=$_POST['ve3_idsalle'];
              $emploidb->create($semaine,$l5,$horaireve3,$idsalleve3,$idclasse,1,$matiereve3,$enseignantve3);
       //on rcuprere la premiere ligne
              $horaireve4=$_POST['ve4_horaire'];
              $matiereve4=$_POST['ve4_matiere'];
              $enseignantve4=$_POST['ve4_enseignant'];
              $idsalleve4=$_POST['ve4_idsalle'];
              $emploidb->create($semaine,$l5,$horaireve4,$idsalleve4,$idclasse,1,$matiereve4,$enseignantve4);                     

              
       }






       if ($l6=="Samedi") {
       //on rcuprere la premiere ligne
              $horairese1=$_POST['se1_horaire'];
              $matierese1=$_POST['se1_matiere'];
              $enseignantse1=$_POST['se1_enseignant'];
              $idsallese1=$_POST['se1_idsalle'];
              $emploidb->create($semaine,$l6,$horairese1,$idsallese1,$idclasse,1,$matierese1,$enseignantse1);
       //on rcuprere la deuxieme ligne
              $horairese2=$_POST['se2_horaire'];
              $matierese2=$_POST['se2_matiere'];
              $enseignantse2=$_POST['se2_enseignant'];
              $idsallese2=$_POST['se2_idsalle'];
              $emploidb->create($semaine,$l6,$horairese2,$idsallese2,$idclasse,1,$matierese2,$enseignantse2);
       //on rcuprere la premiere ligne
              $horairese3=$_POST['se3_horaire'];
              $matierese3=$_POST['se3_matiere'];
              $enseignantse3=$_POST['se3_enseignant'];
              $idsallese3=$_POST['se3_idsalle'];
              $emploidb->create($semaine,$l6,$horairese3,$idsallese3,$idclasse,1,$matierese3,$enseignantse3);
       //on rcuprere la premiere ligne
              $horairese4=$_POST['se4_horaire'];
              $matierese4=$_POST['se4_matiere'];
              $enseignantse4=$_POST['se4_enseignant'];
              $idsallese4=$_POST['se4_idsalle'];
              $emploidb->create($semaine,$l6,$horairese4,$idsallese4,$idclasse,1,$matierese4,$enseignantse4);                     

              
       }


       if ($l7=="Dimanche") {
       //on rcuprere la premiere ligne
              $horairede1=$_POST['de1_horaire'];
              $matierede1=$_POST['de1_matiere'];
              $enseignantde1=$_POST['de1_enseignant'];
              $idsallede1=$_POST['de1_idsalle'];
              $emploidb->create($semaine,$l7,$horairede1,$idsallede1,$idclasse,1,$matierede1,$enseignantde1);
       //on rcuprere la deuxieme ligne
              $horairede2=$_POST['de2_horaire'];
              $matierede2=$_POST['de2_matiere'];
              $enseignantde2=$_POST['de2_enseignant'];
              $idsallede2=$_POST['de2_idsalle'];
              $emploidb->create($semaine,$l7,$horairede2,$idsallede2,$idclasse,1,$matierede2,$enseignantde2);
       //on rcuprere la premiere ligne
              $horairede3=$_POST['de3_horaire'];
              $matierede3=$_POST['de3_matiere'];
              $enseignantde3=$_POST['de3_enseignant'];
              $idsallede3=$_POST['de3_idsalle'];
              $emploidb->create($semaine,$l7,$horairede3,$idsallede3,$idclasse,1,$matierede3,$enseignantde3);
       //on rcuprere la premiere ligne
              $horairede4=$_POST['de4_horaire'];
              $matierede4=$_POST['de4_matiere'];
              $enseignantde4=$_POST['de4_enseignant'];
              $idsallede4=$_POST['de4_idsalle'];
              $emploidb->create($semaine,$l7,$horairede4,$idsallede4,$idclasse,1,$matierede4,$enseignantde4);                     

              
       }
	


       header('Location:../app.php?view=emploi');
              
}




       
       








 ?>