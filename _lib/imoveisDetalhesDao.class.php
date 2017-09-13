<?PHP

class imoveisDetalhesDao extends Dao
{
	private $table = "mi_imoveis_detalhes";
	
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
		return parent::getAllById($id,'id_imoveis_detalhes', $this->table);
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
	
	public function getImovelDetalhe($id){
		
		$sql = '
				select 
					id.id_imovel,
					d.detalhe,
					replace(replace(d.detalhe," ","_"),"ç","c") as detalhe_vetor,
					id.complemento
				from 
					mi_imoveis_detalhes id
					join mi_detalhes d on id.id_detalhe=d.id_detalhe
				where
					id.id_imovel='.$id.';
				';
		return $this->sql($sql);
				
	}

}
