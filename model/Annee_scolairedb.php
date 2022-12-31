<?php 
require_once 'Database.php';
class Annee_scolairedb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($idmatiere,$idenseignant,$intitule){
		$sql="INSERT INTO annee_scolaire SET id_matiere=?,id_enseignant=?,intitule=?";
		$params=array($idmatiere,$idenseignant,$intitule);
		$this->db->request($sql,$params);
	}
	public function read($idannee){
		$sql="SELECT * FROM annee_scolaire WHERE id_annee_scolaire=?";
		$params=array($idannee);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readA($idintitule){
		$sql="SELECT id_enseignant FROM annee_scolaire WHERE intitule=?";
		$params=array($idintitule);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,false);
		return $data;
	}
	public function readAll(){
		$sql="SELECT * FROM annee_scolaire ORDER BY id_annee_scolaire DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	public function update($idmatiere,$idenseignant,$intitule,$idannee){
		$sql="UPDATE annee_scolaire SET id_matiere=?,id_enseignant=?,intitule=? WHERE id_annee_scolaire=?";
		$params=array($idmatiere,$idenseignant,$intitule,$idannee);
		$this->db->request($sql,$params);
	}
	public function delete($idannee){
		$sql="DELETE FROM annee_scolaire WHERE id_annee_scolaire=?";
		$params=array($idannee);
		$this->db->request($sql,$params);
	}
}



 ?>