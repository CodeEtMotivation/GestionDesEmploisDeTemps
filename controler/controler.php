<?php 
session_start();
require  'model/Filieredb.php';
require  'model/Niveaudb.php';
require  'model/Specialitedb.php';
require  'model/Salledb.php';
require  'model/Matieredb.php';
require  'model/Enseignantdb.php';
require  'model/Annee_scolairedb.php';
require  'model/Usersdb.php';
require  'model/Contenirdb.php';
require  'model/Classedb.php';
require  'model/Emploidb.php';

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



 ?>