<?php 
require_once 'Database.php';

class Salledb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($intitule){
		$sql="INSERT INTO salle SET intitule=?";
		$params=array($intitule);
		$this->db->request($sql,$params);
	}
	public function read($idsalle){
		$sql="SELECT * FROM salle WHERE id_salle=?";
		$params=array($idsalle);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readId($idintitule){
		$sql="SELECT * FROM salle WHERE intitule=?";
		$params=array($idintitule);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readAll(){
		$sql="SELECT * FROM salle ORDER BY id_salle DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	public function update($intitule,$idsalle){
		$sql="UPDATE salle SET intitule=? WHERE id_salle=?";
		$params=array($intitule,$idsalle);
		$this->db->request($sql,$params);
	}
	public function delete($idsalle){
		$sql="DELETE FROM salle WHERE id_salle=?";
		$params=array($idsalle);
		$this->db->request($sql,$params);
	}
}





 ?>