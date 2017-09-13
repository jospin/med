<?PHP
	
class sampleBean extends Bean
{

	private $table = "sample";
	public function __construct()
	{
	
		parent::setAttributes($this->table);
	
	}
}

?>
