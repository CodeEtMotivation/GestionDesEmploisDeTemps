<?php 

require  '../model/Usersdb.php';

 session_start();
$usersdb= new Usersdb();

$form=$_GET['form'];


if ($form == "administration") {
	$login=$_POST['login'];
    $password=$_POST['password'];
	$users =$usersdb->readConnexion($login,$password);

	if ($users == false) {
		$_SESSION['erreur']=array(
		'type' => 'danger',
		'message' => 'Echec de la connexion'
	    );
	    header('Location:../index.php');
	}else{

			$_SESSION['profil']=$users;
    
    			$_SESSION['erreur']=array(
				'type' => 'information',
				'message' => 'Bienvenue' .$users->nom
	                                     );
    	        header('Location:../app.php?view=acceuil');
		
	}

}else{

	$libelle_specialite=$_POST['libelle_specialit'];
    $libelle_niveau=$_POST['libelle_niveau'];

    
    $_SESSION['erreur']=array(
	'type' => 'information',
	'message' => 'Bienvenue' . "etudiants"
	                                     );
    header('Location:../app_etud.php');
}


	
	
		 
		
	






 ?>