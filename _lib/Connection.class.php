<?php
class Connection {

	private static $con;
	private static $dbType = "mysql";

	private static $host = "localhost";
	private static $user = "########";
	private static $pass = "#######";
	private static $db = "medeirosimoveis_dev";

	private static $persistencia = false;

	public function __constructor($persistencia = false){

		if($persistencia != false) { self::$persistencia = true; }
		
	}

	public static function getConnection(){

		try{

			self::$con = new PDO(self::$dbType.":host=".self::$host.";dbname=".self::$db,self::$user, self::$pass, array(PDO::ATTR_PERSISTENT=> self::$persistencia, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			return self::$con;

		}catch(PDOException $ex){
			var_dump($ex);
			echo "ERRO:".$ex->getMessage();

		}

	}
	public static function getAttributes($table){
		return;
	}
	
	/**********
	 * verificar esta implementação
	public static function getAttributes($table){
	
		$db = self::getConnection();

		$obj = new stdClass();
		$query = "select table_name, column_name from information_schema.columns where table_schema='".self::$db."' and table_name='".$table."'";

		$stmt = $db->prepare($query);
		$stmt->setFetchMode(PDO::FETCH_INTO, $obj);
		$stmt->execute();		
		
		print_r($obj);
		/*while(){
			$table = $tbl->table_name;
		    $table->$tbl->column_name = "";
		}
		//var_dump($table);
		//return $tbl->table_name;
	
	}*/////////////

	public function getSchema()
	{
		return self::$db;
	}
	
	public function Close(){

		if(self::$con != NULL){
			self::$con = NULL;
		}

	}


}

?>
