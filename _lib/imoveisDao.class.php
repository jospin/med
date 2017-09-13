<?PHP

class imoveisDao extends Dao
{
	private $table = "mi_imoveis";
	
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
		return parent::getAllById($id,'id_imovel', $this->table);
	}
	
	public function getAllOrdered($row, $page, $idx=NULL, $sort=NULL)
	{
		return parent::getAllOrdered($this->table, $row, $page, $idx, $sort);
	}	
	
	
	public function getAll2()
	{
		return parent::getAll($this->table);
	}
	
	public function getAll($id_praia = null)
	{
		if($id_praia){
			$sql_praia = "id_praia=$id_praia and";
		}
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						$sql_praia
						i.publicar='S'
					order by data desc
		";
		return $this->sql($sql);
	}


	public function getAllFiltro(){
		$sql = "select count(1) as filtro, mp.praia, mp.id_praia from mi_imoveis mi left join mi_praias mp on mp.id_praia=mi.id_praia where mi.publicar='S' group by mp.praia, mp.id_praia order by mp.praia;";

		return $this->sql($sql);
	}	
	
	public function getAllCasas($id_praia = null)
	{
		if($id_praia){
			$sql_praia = "id_praia=$id_praia and";
		}
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						$sql_praia
						i.publicar='S'
						and i.tipo='C'
					order by data desc
		";
		return $this->sql($sql);
	}
	
	public function getAllCasasCompra($id_praia = null)
	{
		$sql_praia = "";
		if($id_praia){
			$sql_praia = "id_praia=$id_praia and";
		}
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						$sql_praia
						i.publicar='S'
						and i.tipo='C'
						and i.categoria='V'
					order by data desc
		";
		return $this->sql($sql);
	}

	public function getAllCasasCompraFiltro(){
		$sql = "select count(1) as filtro, mp.praia, mp.id_praia from mi_imoveis mi left join mi_praias mp on mp.id_praia=mi.id_praia where mi.publicar='S' and mi.tipo='C' and mi.categoria='V' group by mp.praia, mp.id_praia order by mp.praia;";

		return $this->sql($sql);
	}
	
	public function getAllCasasTemporada($id_praia)
	{
		$sql_praia="";
		if($id_praia){
			$sql_praia = "id_praia=$id_praia and";
		}
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						$sql_praia
						i.publicar='S'
						and i.tipo='C'
						and i.categoria='T'
					order by data desc
		";
		return $this->sql($sql);
	}
	
	public function getAllCasasTemporadaFiltro(){
		$sql = "select count(1) as filtro, mp.praia, mp.id_praia from mi_imoveis mi left join mi_praias mp on mp.id_praia=mi.id_praia where mi.publicar='S' and mi.tipo='C' and mi.categoria='T' group by mp.praia, mp.id_praia order by mp.praia;";

		return $this->sql($sql);
	}

	public function getAllCasasAluguel($id_praia = null)
	{
		if($id_praia){
			$sql_praia = "id_praia=$id_praia and";
		}

		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						$sql_praia
						i.publicar='S'
						and i.tipo='C'
						and i.categoria='A'
					order by data desc
		";
		return $this->sql($sql);
	}

	public function getAllCasasAluguelFiltro(){
		$sql = "select count(1) as filtro, mp.praia, mp.id_praia from mi_imoveis mi left join mi_praias mp on mp.id_praia=mi.id_praia where mi.publicar='S' and mi.tipo='C' and mi.categoria='A' group by mp.praia, mp.id_praia order by mp.praia;";

		return $this->sql($sql);
	}	
	
	public function getAllTerrenos($id_praia = null)
	{
		if($id_praia){
			$sql_praia = "id_praia=$id_praia and";
		}
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						$sql_praia
						i.publicar='S'
						and i.tipo='T'
					order by data desc
		";
		return $this->sql($sql);
	}

	public function getAllTerrenosFiltro(){
		$sql = "select count(1) as filtro, mp.praia, mp.id_praia from mi_imoveis mi left join mi_praias mp on mp.id_praia=mi.id_praia where mi.publicar='S' and mi.tipo='T' group by mp.praia, mp.id_praia order by mp.praia;";

		return $this->sql($sql);
	}
	
	public function getHomeDestaque(){
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						i.destaque='S'
						and i.publicar='S'
					order by rand()
					limit 3
		";
		return $this->sql($sql);
	}
	
	public function getHomeFeatured(){
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						i.exibir_home='S'
						and i.publicar='S'
					order by rand()
					limit 4
		";
		return $this->sql($sql);
	}
	
	public function getInnerImoveisPraia($id_praia){
		$sql =  "
					select 
						i.id_imovel
					from
						mi_imoveis i
					where 
						i.publicar='S'
						and i.id_praia=$id_praia
					order by rand()
					limit 2
		";

		return $this->sql($sql);
	}
	
	public function getImovel($id){
		$sql="
			select 
				i.*, 
				p.praia
			from
				mi_imoveis i
				join mi_praias p on i.id_praia=p.id_praia
			where 
				id_imovel=$id
		";
		$x = $this->returnObject($sql);
		return 	$x;
	}

	public function getImovelList(){
		$sql = "select 
					id_imovel, 
					praia, 
					LOWER(proprietario) as proprietario, 
					LOWER(endereco) as endereco, 
					tipo, 
					ddd, 
					telefone 
				from 
					mi_imoveis mii join mi_praias mip on mii.id_praia=mip.id_praia";

		$x = $this->sql($sql);
		return $x;
	}
	
	public function deleteById($id)
	{
		return parent::deleteById($id, $this->table);
	}

}
