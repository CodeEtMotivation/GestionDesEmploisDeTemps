<?php 
require_once 'Database.php';
class Contenirdb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($idclasse,$idmatiere){
		$sql="INSERT INTO contenir SET id_classe=?,id_matiere=?";
		$params=array($idclasse,$idmatiere);
		$this->db->request($sql,$params);
	}
	public function read($idcontenir){
		$sql="SELECT * FROM contenir WHERE id_contenir=?";
		$params=array($idcontenir);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readClasse($idclasse){
		$sql="SELECT * FROM contenir WHERE id_classe=?";
		$params=array($idclasse);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,false);
		return $data;
	}
	public function readAll(){
		$sql="SELECT * FROM contenir ORDER BY id_contenir DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}

	public function update($idclasse,$idmatiere,$idcontenir){
		$sql="UPDATE contenir SET id_classe=?,id_matiere=? WHERE id_contenir=?";
		$params=array($idclasse,$idmatiere,$idcontenir);
		$this->db->request($sql,$params);
	}
	
	public function delete($idcontenir){
		$sql="DELETE FROM contenir WHERE id_contenir=?";
		$params=array($idcontenir);
		$this->db->request($sql,$params);
	}
}



 ?>