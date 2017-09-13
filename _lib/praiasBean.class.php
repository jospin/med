<?PHP
	
class praiasBean extends Bean
{

	private $table = "mi_praias";
	public function __construct()
	{
	
		parent::setAttributes($this->table);
	
	}
}

?>
