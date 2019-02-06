<?php 
require_once(DEV_ROOT_PATH.'application/core/DbModel.php');
	/**
	 * Users
	 */
	class Users extends DbModel
	{
		protected static $table = "users";
		protected static $columns = array("id", "name", "email", "password", "id_role");
		public static function checkUserForLogin($email, $password)
		{
			$dbConnection = Parent::getConnection();
			$resultQuery = $dbConnection->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
			$resultQuery->bindParam(':email',$email,PDO::PARAM_INT);
			$resultQuery->bindParam(':password',$password,PDO::PARAM_INT);
			$resultQuery->execute();
			$user = $resultQuery->fetch();
			if($user){
				//password_verify()
				return $user;
			}
			else{
				return false;
			}
		}
		public static function addUser(array $user)
		{
			$dbConnection = Parent::getConnection();
			$resultQuery = $dbConnection->prepare("INSERT INTO ".self::$table." (".implode(",",self::$columns).") VALUES (NULL, :".self::$columns[2].", :".self::$columns[3].", :".self::$columns[4].", '2')");
			$resultQuery->bindParam(':name', $user["name"], PDO::PARAM_STR);
			$resultQuery->bindParam(':email', $user["email"], PDO::PARAM_STR);
			$resultQuery->bindParam(':password', $user["password"], PDO::PARAM_STR);
			$user = $resultQuery->execute();
			if($user){
				return $user;
			}
			else{
				return false;
			}
		}
	}
?>