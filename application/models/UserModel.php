<?php 
require_once(DEV_ROOT_PATH.'application/core/DbModel.php');
	/**
	 * User
	 */
	class User extends DbModel{
		
			public static function checkUserForLogin($email, $password){
				$dbConnection = Parent::getConnection();
				$sqlQuery = "SELECT * FROM users WHERE email = :email AND password = :password ";
				$resultQuery = $dbConnection->prepare($sqlQuery);
				$resultQuery->bindParam(':email',$email,PDO::PARAM_INT);
				$resultQuery->bindParam(':password',$password,PDO::PARAM_INT);
				$resultQuery->execute();
				$user = $resultQuery->fetch();
				if($user){
					return $user['id'];
				}
				else{
					return false;
				}

			}
	}
?>