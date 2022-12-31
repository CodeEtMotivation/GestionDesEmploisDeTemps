<?php 
require_once 'Database.php';

class Classedb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($intitule,$idspecialite,$idniveau){
		$sql="INSERT INTO classe SET intitule=?,id_specialite=?,id_niveau=?";
		$params=array($intitule,$idspecialite,$idniveau);
		$this->db->request($sql,$params);
	}
	public function read($idclasse){
		$sql="SELECT * FROM classe WHERE id_classe=?";
		$params=array($idclasse);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readId($intitule){
		$sql="SELECT * FROM classe WHERE intitule=?";
		$params=array($intitule);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}

	public function readAll(){
		$sql="SELECT * FROM classe ORDER BY id_classe DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	public function update($intitule,$idspecialite,$idniveau,$id_classe){
		$sql="UPDATE classe SET intitule=?,id_specialite=?,id_niveau=? WHERE id_classe=?";
		$params=array($intitule,$idspecialite,$idniveau,$id_classe);
		$this->db->request($sql,$params);
	}
	public function delete($idclasse){
		$sql="DELETE FROM classe WHERE id_classe=?";
		$params=array($idclasse);
		$this->db->request($sql,$params);
	}
}



 ?>