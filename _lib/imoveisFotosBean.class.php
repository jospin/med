<?PHP
	
class imoveisFotosBean extends Bean
{

	private $table = "mi_fotos";
	public function __construct()
	{
	
		parent::setAttributes($this->table);
	
	}
}

?>
