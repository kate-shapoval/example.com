<?php
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/models/Users.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
	/**
	 * UserController
	 */
	class UserController extends Controller{
		function actionLogin(){
			if(isset($_POST['submit'])){
				echo "submit";
				$errors = false;
				/*if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$errors['email'] = 'Wrong email';
				}
				if (strlen($password) < 6) {
					$errors['password'] = 'Password must be more than 6 characters';
				}*/
				$user = Users::checkUserForLogin($_POST['email'], $_POST['password']);
				/*echo $user['id'];
				echo "<br/>";
				echo $user['name'];*/
				if($user['id']){
					
					$_SESSION['user'] = $user['name'];
					echo $_SESSION['user'];
					//header(DEV_ROOT_PATH."/account");
					$view = new View();
					$view->viewRender('AccountView.html',array('errors'=>$errors, 'user'=>$_SESSION['user']));
				}
				else{
					$errors['loginData'] = 'Incorrect login data';
					echo "<pre>";
					var_dump($errors);
					echo "</pre>";
					$view = new View();
					$view->viewRender('LoginView.html',array('errors'=>$errors));
				}
			}
			else{
				$view = new View();
				$view->viewRender('LoginView.html');
				return true;
			}
		}
		function actionLogout(){
			session_start();
			unset($_SESSION["user"]);
       		$view = new View();
			$view->viewRender('MainView.html',array('errors'=>$errors));
			return true;
		}
	}
?>