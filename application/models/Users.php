<?php 
require_once(DEV_ROOT_PATH.'application/core/DbModel.php');
	/**
	 * Users
	 */
	class Users extends DbModel{
		
			public static function checkUserForLogin($email, $password){
				$dbConnection = Parent::getConnection();
				echo $email;
				echo $password;
				$resultQuery = $dbConnection->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
				$resultQuery->bindParam(':email',$email,PDO::PARAM_INT);
				$resultQuery->bindParam(':password',$password,PDO::PARAM_INT);
				$resultQuery->execute();
				$user = $resultQuery->fetch();
				echo "<pre>";
					var_dump($user);
				echo "</pre>";
				if($user){
					//password_verify()
					return $user;
				}
				else{
					return false;
				}

			}
	}
?>