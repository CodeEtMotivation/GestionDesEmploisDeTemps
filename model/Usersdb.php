<?php 

require_once 'Database.php';

class Usersdb{
	private $db;
	public function __construct(){
		$this->db= new Database;
	}

	public function create($nom,$prenom,$login,$password,$role){
		$sql="INSERT INTO users(nom,prenom,login,password,role) VALUES(?,?,?,?,?)";
		$params=array($nom,$prenom,$login,$password,$role);
		$this->db->request($sql,$params);
	}

	public function read($idusers){
		$data=null;
		$sql="SELECT * FROM users WHERE id_users=?";
		$params=array($idusers);
		$req=$this->db->request($sql,$params);
		$data=$this->db->recover($req,true);
		return $data;
	}
	public function readConnexion($login,$password){
		$sql="SELECT * FROM users WHERE login=? and password=?";
		$params=array($login,$password);
		$req=$this->db->request($sql,$params);
		$data=$this->db->recover($req,true);
		return $data; 
	}
	
	public function readAll(){
		$sql="SELECT * FROM users ORDER BY id_users DESC";
		$req=$this->db->request($sql);
		$datas=$this->db->recover($req,false);
		return $datas; 
	}
	public function update($nom,$prenom,$login,$password,$role,$iduser){
		$sql="UPDATE users SET nom=?,prenom=?,login=?,password=?,role=? WHERE id_users=?";
		$params=array($nom,$prenom,$login,$password,$role,$iduser);
		$this->db->request($sql,$params);
	}
	public function delete($iduser){
		$sql="DELETE FROM users WHERE id_users=?";
		$params=array($iduser);
		$this->db->request($sql,$params);
	}
}











 ?>