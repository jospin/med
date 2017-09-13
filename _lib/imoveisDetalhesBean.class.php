<?PHP
	
class imoveisDetalhesBean extends Bean
{

	private $table = "mi_imoveis_detalhes";
	public function __construct()
	{
	
		parent::setAttributes($this->table);
	
	}
}

?>
