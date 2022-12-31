<?php 
require_once 'Database.php';

class Niveaudb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($intitule){
		$sql="INSERT INTO niveau SET  intitule=?";
		$params=array($intitule);
		$this->db->request($sql,$params);
	}

	public function read($idniveau){
		$sql="SELECT * FROM niveau WHERE id_niveau=?";
		$params=array($idniveau);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}


		public function readId($intitule){
		$sql="SELECT * FROM niveau WHERE intitule=?";
		$params=array($intitule);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}


	public function readAll(){
		$sql="SELECT * FROM niveau ORDER BY id_niveau DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	public function update($intitule,$idniveau){
		$sql="UPDATE niveau SET intitule=? WHERE id_niveau=?";
		$params=array($intitule,$idniveau);
		$this->db->request($sql,$params);
	}
	public function delete($idniveau){
		$sql="DELETE FROM niveau WHERE id_niveau=?";
		$params=array($idniveau);
		$this->db->request($sql,$params);
	}
}



 ?>