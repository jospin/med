<?PHP
class Auth extends Dao

{

	private $table = "";



	public function __construct()

	{

		parent::__construct();

	}

	public function authenticaAdm($user, $pass)

	{

		$query = "SELECT `id_user`, `username` FROM `users` WHERE `username`='".$user."' AND `password` = '".md5($pass)."'";
		$rs = $this->conex->query($query);

		$dados =  $rs->fetchAll(PDO::FETCH_CLASS);	

		

		if($dados[0]->id_user){

			$_SESSION['id_user']=$dados[0]->id_user;

			$_SESSION['authAdm'] = true;

			$_SESSION['login']=$dados[0]->username;
			
			header('location:home.php');

		}else{

			$_SESSION['id_user'] = false;

			$_SESSION['authAdm'] = false;

			$_SESSION['login'] = false;
			
			header('location:index.php?msg=1');
			

		}

		

	}



	public static function verificaAuth()

	{
		if($_SESSION['authAdm'] != false && $_SESSION['id_user'] != false)		{

			$_SESSION['login']=$_SESSION['login'];

			$_SESSION['authAdm'] = true;

		}else{

			$_SESSION['login'] = false;

			$_SESSION['authAdm'] = false;

			//session_destroy();

			header("location:index.php?msg=2");

		}

	}	

}
?>
