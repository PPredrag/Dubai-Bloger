<?php
class DB{
	private static $pdo;
	public function __construct(){
	try{
	self::$pdo = new PDO("mysql:host=localhost; dbname=draganan_dragana", "root","");
	//self::$pdo = new PDO("mysql:host=85.17.187.35; dbname=draganan_dragana", "draganan_gaga","predragpandza123456");
	}catch(PDOExeption $e){
		die($e->getMessage);
	}
	}
	public static function getInstance(){
		if(!self::$pdo);
		new DB;
		return self::$pdo;
	}
public static function close(){
		self::$pdo=null;
	
	}
}
?>