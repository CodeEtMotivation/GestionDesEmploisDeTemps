<?php 
require_once 'Database.php';

class Filieredb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($intitule){
		$sql="INSERT INTO filiere SET intitule=?";
		$params=array($intitule);
		$this->db->request($sql,$params);
	}
	public function read($idfiliere){
		$sql="SELECT * FROM filiere WHERE id_filiere=?";
		$params=array($idfiliere);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readId($intitule){
		$sql="SELECT * FROM filiere WHERE intitule=?";
		$params=array($intitule);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readAll(){
		$sql="SELECT * FROM filiere ORDER BY id_filiere DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	
	public function update($intitule,$idfiliere){
		$sql="UPDATE filiere SET intitule=? WHERE id_filiere=?";
		$params=array($intitule,$idfiliere);
		$this->db->request($sql,$params);
	}
	public function delete($idfiliere){
		$sql="DELETE FROM filiere WHERE id_filiere=?";
		$params=array($idfiliere);
		$this->db->request($sql,$params);
	}
}




 ?>