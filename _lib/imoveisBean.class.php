<?PHP
	
class imoveisBean extends Bean
{

	private $table = "mi_imoveis";
	public function __construct()
	{
	
		parent::setAttributes($this->table);
	
	}
}

?>
