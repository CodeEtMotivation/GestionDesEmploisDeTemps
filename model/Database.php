<?php 

//une request preparer: ecrire sans fournit les valeurs;les vaaleurs sont fournits lors de l'execution de la requestev
class Database
{
	private $dsn;
	private $username;
	private $password;
	public function __construct(){
		$this->dsn="mysql:host=localhost;dbname=timesoft;port=3306;charset=utf8";
		$this->username="root";
		$this->password="";
	}
	public function chaineconnexion(){
		$pdo = new PDO($this->dsn,$this->username,$this->password);//new odbcconnection
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//activer le rapport d'erreur
		return $pdo;
	}
	public function request($sql,$params=null){
		$pdo=$this->chaineconnexion();
		$req=$pdo->prepare($sql); 
		if($params == null){
			$req->execute();
		}else{
			$req->execute($params);
		}
		return $req;

	}
	public function recover($req,$one=true){
		$datas=null;
		$req->setFetchMode(PDO::FETCH_OBJ); //on recupere un tableau d'objet
		if($one == true){
			$datas=$req->fetch();
		}else{
			$datas=$req->fetchAll();
		}
		return $datas;
	}
}

 ?>