<?php 
require_once 'Database.php';
class Emploidb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($semaine,$jour,$horaire,$idsalle,$idclasse,$idusers,$matiere,$enseignant){
		$sql="INSERT INTO emploi SET semaine=?,jour=?,horaire=?,id_salle=?,id_classe=?,id_users=?,intitule_matiere=?,intitule_enseignant=?";
		$params=array($semaine,$jour,$horaire,$idsalle,$idclasse,$idusers,$matiere,$enseignant);
		$this->db->request($sql,$params);
	}
	public function read($semaine,$idclasse,$jour){
		$sql="SELECT * FROM emploi WHERE semaine=? and id_classe=? and jour=?";
		$params=array($semaine,$idclasse,$jour);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,false);
		return $data;
	}

	public function readSemaine($semaine){
		$sql="SELECT * FROM emploi WHERE semaine=?";
		$params=array($semaine);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,false);
		return $data;
	}
	public function update($semaine,$jour,$horaire,$idsalle,$idclasse,$idusers,$idemploi){
		$sql="UPDATE emploi SET semaine=?,jour=?,horaire=?,id_salle=?,id_classe=?,id_users=? WHERE id_emploi=?";
		$params=array($semaine,$jour,$horaire,$idsalle,$idclasse,$idusers,$idemploi);
		$this->db->request($sql,$params);
	}
	public function delete($idemploi){
		$sql="DELETE FROM emploi WHERE id_emploi=?";
		$params=array($idemploi);
		$this->db->request($sql,$params);
	}
}



 ?>