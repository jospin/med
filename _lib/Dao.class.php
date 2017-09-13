<?PHP

class Dao{

	private $conn = NULL;
	private $schema;
	private $lastId;
	private $soapServer;
	 
	public function __construct(){
	
		$this->conex = Connection::getConnection();
		$this->schema = Connection::getSchema();
	
	}
	/**
	 * @deprecated
	 */
	public function insere(Bean $bean, $tbl){
		extract($bean->getAttributes($tbl));
		
		$query = "insert into ".$tbl." (";
		
		foreach($$tbl as $campo=>$val){
			
			$queryCampos .= $campo.",";
			$queryValues .= $bean->$campo.",";
		
		}

		$query = $query . substr($queryCampos,0,-1) . ") values (".substr($queryValues,0,-1) . ");";
    $this->conex->query($query);
		$_SESSION[$tbl][$this->getKey($tbl)]=$this->conex->lastInsertId();
	}

	public function insertBind(Bean $bean, $tbl){
		
		$query = "insert into ".$tbl." (";
		$chave = $this->getKey($tbl);
		
		$queryCampos = "";
		$queryValues = "";
		$c = "";
		
		foreach($bean as $campo=>$val){
			
			$queryCampos .= $campo.",";
			$queryValues .= "?,";

			$c++;
		}

		$query = $query . substr($queryCampos,0,-1) . ") values (".substr($queryValues,0,-1) . ");";

		$stmt = $this->conex->prepare($query);
		
		$c=1;
		foreach($bean as $campo=>$val){
			$stmt->bindValue($c,$bean->$campo);

			$c++;
		}		
        try{
			$stmt->execute();
		}catch(Exception $e){
			var_dump($e);
		}

		$_SESSION[$tbl][$this->getKey($tbl)]=$this->conex->lastInsertId();
		
		return $this->conex->lastInsertId();
	}
	
	public function replaceBind(Bean $bean, $tbl){
		
		$query = "replace into ".$tbl." (";
		$chave = $this->getKey($tbl);
		foreach($bean as $campo=>$val){
			
			$queryCampos .= $campo.",";
			$queryValues .= "?,";

			$c++;
		}

		$query = $query . substr($queryCampos,0,-1) . ") values (".substr($queryValues,0,-1) . ");";

		$stmt = $this->conex->prepare($query);
		
		$c=1;
		foreach($bean as $campo=>$val){
			
			$stmt->bindValue($c,$bean->$campo);

			$c++;
		}		

		$stmt->execute();

		$_SESSION[$tbl][$this->getKey($tbl)]=$this->conex->lastInsertId();
		
		return $this->conex->lastInsertId();
	}	
	
	public function updateBind(Bean $bean, $tbl){
	
		$query = "update ".$tbl." set ";
		$chave = $this->getKey($tbl);
		foreach($bean as $campo=>$val){
			
			$queryCampos .= $campo."=?,";
			$c++;
		}

		$query = $query . substr($queryCampos,0,-1) . " where $chave=".$bean->$chave.";";
		$stmt = $this->conex->prepare($query);
		$c=1;
		foreach($bean as $campo=>$val){
			
			$stmt->bindValue($c,$bean->$campo);

			$c++;
		}		

		$stmt->execute();

		return true;
	}	
	
	public function getById($id, $tbl)
	{
		$chave = $this->getKey($tbl);
		
		$query = "select * from ".$tbl." where $chave=$id";
		$rs = $this->conex->query($query);
		return $rs->fetchObject();	
		
	}
	
	public function getByKeyId($key, $id, $tbl)
	{
		$query = "select * from ".$tbl." where $key=$id";

		$rs = $this->conex->query($query);
		return $rs->fetchObject();	
		
	}
		
	public function getAllById($id, $par, $tbl)
	{
		
		$query = "select * from ".$tbl." where $par='$id'";
		$rs = $this->conex->query($query);
		return $rs->fetchAll(PDO::FETCH_CLASS);	
		
	}	
	
	public function getAll($tbl)
	{
	
		$query = "select * from ".$tbl;
		$rs = $this->conex->query($query);
		return $rs->fetchAll(PDO::FETCH_CLASS);	
		
	}
	
	public function getAllOrdered($tbl,$row=NULL, $page=NULL,$idx=NULL,$sort=NULL)
	{
	
		if(!empty($row) && !empty($page)){
			$queryLimit = "limit $row,$page";
		}
		
		if(!empty($idx)){
			$queryOrder = "order by $idx";
		}
		
		if(!empty($sort)){
			$queryOrder .= " ".$sort;
		}
		
		$query = "select * from ".$tbl." $queryOrder $queryLimit";
		$rs = $this->conex->query($query);
		return $rs->fetchAll(PDO::FETCH_CLASS);	
		
	}	
	
	public function returnObject($query){
		
		$rs = $this->conex->query($query);
		return $rs->fetchObject();	
	}
	
	public function deleteById($id, $tbl)
	{
		$chave = $this->getKey($tbl);
	
		$query = "delete from ".$tbl." where $chave=$id";
		echo $query;
		$rs = $this->conex->query($query);
		return true;
		
	}		
    
    public function deleteAllById($id, $par, $tbl)
    {
    
        $query = "delete from ".$tbl." where $par=$id";
        $rs = $this->conex->query($query);
        return true;
        
    }	
	public function save(Bean $bean, $tbl){
		
		foreach($bean as $campo=>$val){
			$_SESSION[$tbl][$campo] = $bean->$campo;
		}
	
	}

	public function getKey($tabela){
		
		$query = "select column_name from information_schema.columns where column_key='PRI' and table_name='".$tabela."' and table_schema='".$this->schema."';";

		$rs = $this->conex->query($query);
		$chave = $rs->fetchObject();

		return $chave->column_name;
	
	}	
	
	public function getLastId(){

		$query ='SELECT LAST_INSERT_ID() as last_id';
		$rs = $this->conex->query($query);
		$lastId = $rs->fetch();

		return $lastId[0];
	
	}	

    public function sql($query)
    {
    
        $rs = $this->conex->query($query);
        return $rs->fetchAll(PDO::FETCH_CLASS); 
        
    }
	
}

?>
