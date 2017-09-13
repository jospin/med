<?PHP

class imoveisFotosDao extends Dao
{
	private $table = "mi_fotos";
	
	public function __construct()
	{
			
		parent::__construct();
	
	}
	
	public function insertBind(Bean $bean)
	{
		return parent::insertBind($bean, $this->table);
	}
	
	public function updateBind(Bean $bean)
	{
	
		parent::updateBind($bean, $this->table);
	
	}	
	
	public function save(Bean $bean){
	
		parent::save($bean, $this->table);
	
	}	

	public function getById($id)
	{
		return parent::getById($id, $this->table);
	}
	
	public function getAllById($id)
	{
		return parent::getAllById($id,'id_foto', $this->table);
	}
	
	public function getAllByIdImovel($id)
	{
		return parent::getAllById($id,'id_imovel', $this->table);
	}
	
	public function getAllOrdered($row, $page, $idx=NULL, $sort=NULL)
	{
		return parent::getAllOrdered($this->table, $row, $page, $idx, $sort);
	}	
	
	public function getAll()
	{
		return parent::getAll($this->table);
	}
	
	public function deleteById($id)
	{
		return parent::deleteById($id, $this->table);
	}

}
