<?PHP

class Bean {

	private $Attributes;
	
	public function setAttributes($table){
	
		$this->Attributes = Connection::getAttributes($table);

	}
	
	public function getAttributes(){
	
		return $this->Attributes;
	
	}
	
	public function __set($atr,$value){
	
		$this->$atr = $value;
	
	}
		
	public function __get($atr){
	
		return $this->$atr;
	
	}
	
	public function arrToBean($arr){
		foreach($arr as $vector=>$val){
			$this->__set($vector, $val);
		}
	}
	
}


?>