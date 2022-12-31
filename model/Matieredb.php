<?php 
require_once 'Database.php';
class Matieredb{  
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($intitule){
		$sql="INSERT INTO matiere SET intitule=?";
		$params=array($intitule);
		$this->db->request($sql,$params);
	}
	public function read($idmatiere){
		$sql="SELECT * FROM matiere WHERE id_matiere=?";
		$params=array($idmatiere);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readId($intitule){
		$sql="SELECT * FROM matiere WHERE intitule=?";
		$params=array($intitule);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readAll(){
		$sql="SELECT * FROM matiere ORDER BY id_matiere DESC";
		$req= $this->db->request($sql); 
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	public function update($intitule,$idmatiere){
		$sql="UPDATE matiere SET intitule=? WHERE id_matiere=?";
		$params=array($intitule,$idmatiere);
		$this->db->request($sql,$params);
	}
	public function delete($idmatiere){
		$sql="DELETE FROM matiere WHERE id_matiere=?";
		$params=array($idmatiere);
		$this->db->request($sql,$params);
	}
}



 ?>