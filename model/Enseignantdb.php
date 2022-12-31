<?php 
require_once 'Database.php';
class Enseignantdb{
	private $db;

	public function __construct(){
		$this->db=new Database();
	}
	public function create($nom,$prenom,$sexe,$telephone,$email){
		$sql="INSERT INTO enseignant SET nom=?,prenom=?,sexe=?,telephone=?,email=?";
		$params=array($nom,$prenom,$sexe,$telephone,$email);
		$this->db->request($sql,$params);
	}
	public function read($idenseignant){
		$sql="SELECT * FROM enseignant WHERE id_enseignant=?";
		$params=array($idenseignant);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readId($nom){
		$sql="SELECT * FROM enseignant WHERE nom=?";
		$params=array($nom);
		$req= $this->db->request($sql,$params);
		$data =$this->db->recover($req,true);
		return $data;
	}
	public function readAll(){
		$sql="SELECT * FROM enseignant ORDER BY id_enseignant DESC";
		$req= $this->db->request($sql);
		$datas=$this->db->recover($req, false);
		return $datas;
	}
	public function update($nom,$prenom,$sexe,$telephone,$email,$idenseignant){
		$sql="UPDATE enseignant SET nom=?,prenom=?,sexe=?,telephone=?,email=? WHERE id_enseignant=?";
		$params=array($nom,$prenom,$sexe,$telephone,$email,$idenseignant);
		$this->db->request($sql,$params);
	}
	public function delete($idenseignant){
		$sql="DELETE FROM enseignant WHERE id_enseignant=?";
		$params=array($idenseignant);
		$this->db->request($sql,$params);
	}
}



 ?>