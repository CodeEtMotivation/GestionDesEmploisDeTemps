<?php 
require_once 'Database.php';

class Specialitedb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($idfiliere,$intitule){
		$sql="INSERT INTO specialite SET id_filiere=?, intitule=?";
		$params=array($idfiliere,$intitule);
		$this->db->request($sql,$params);
	}
	public function read($idspecialite){
		$sql="SELECT * FROM specialite WHERE id_specialite=?";
		$params=array($idspecialite);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readId($intitule_specialite){
		$sql="SELECT * FROM specialite WHERE intitule=?";
		$params=array($intitule_specialite);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readAll(){
		$sql="SELECT * FROM specialite ORDER BY id_specialite DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	public function update($idfiliere,$intitule,$idspecialite){
		$sql="UPDATE specialite SET id_filiere=?, intitule=? WHERE id_specialite=?";
		$params=array($idfiliere,$intitule,$idspecialite);
		$this->db->request($sql,$params);
	}
	public function delete($idspecialite){
		$sql="DELETE FROM specialite WHERE id_specialite=?";
		$params=array($idspecialite);
		$this->db->request($sql,$params);
	}
}



 ?>