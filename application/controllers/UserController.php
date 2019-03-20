<?php
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/models/Users.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
	/**
	 * UserController
	 */
	class UserController extends Controller
	{
		function actionLogin()
		{
			if(isset($_POST['submit'])){
				$errors = false;
				$user = Users::checkUserForLogin($_POST['email'], $_POST['password']);
				if($user['id']){
					
					$_SESSION['user'] = $user['name'];
					echo $_SESSION['user'];
					header("Location: account/");
					$view = new View();
					$view->viewRender('AccountView.html',array('errors'=>$errors, 'user'=>$_SESSION['user']));
				}
				else{
					$errors['loginData'] = 'Incorrect login data';
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
		function actionRegistration()
		{
			if(isset($_POST['submit'])){
				$errors = false;
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$errors['email'] = 'Wrong email';
				}
				if (strlen($_POST['password']) < 6) {
					$errors['password'] = 'Password must be more than 6 characters';
				}
				$user = array("name" => $_POST['name'], "email" => $_POST['email'] , "password" => $_POST['password']);
				$user = Users::addUser($user);
				//echo $user['id'];
				if($user['name']){
					$_SESSION['user'] = $user['name'];
					echo $_SESSION['user'];
					header("Location: account/");
					$view = new View();
					$view->viewRender('AccountView.html',array('errors'=>$errors, 'user'=>$_SESSION['user']));
				}
				else{
					$errors['loginData'] = 'Incorrect login data';
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
			unset($_SESSION["user"]);
       		$view = new View();
			$view->viewRender('MainView.html');
			return true;
		}
	}
?>