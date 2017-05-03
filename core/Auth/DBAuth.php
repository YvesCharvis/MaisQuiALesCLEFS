<?php
namespace Core\Auth;
use Core\Database\Database;
/**
* classe pour la connexion au site via une base de donné
*/
class DBAuth
{
	protected $db;
	function __construct(Database $db)
	{
		$this->db = $db;
	}

	public function connect($username, $password)
	{
		$user = $this->db->prepare("SELECT * 
									FROM cats 
									WHERE name = ?",
									[$username], null, true);
		if($user){
			if ($user->password === sha1($password)) {
				$_SESSION['catsconnect'] = $user->id;
				return true;
			}
		}
		return false;
	}

	public function logged()
	{
		return isset($_SESSION['catsconnect']);
	}

	public function getUserId()
	{
		if ($this->logged()) {
			return $_SESSION['catsconnect'];
		}else{
			return false;
		}

	}


}