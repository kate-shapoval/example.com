<?php
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/models/UserModel.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
	/**
	 * UserController
	 */
	class UserController extends Controller{
		function actionLogin(){
			if(isset($_POST['submit'])){
				$errors = false;
				/*if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$errors['email'] = 'Wrong email';
				}
				if (strlen($password) < 6) {
					$errors['password'] = 'Password must be more than 6 characters';
				}*/
				$userId = User::checkUserForLogin($_POST['email'], $_POST['password']);
				if($userId){
					session_start();
					$_SESSION['user'] = $userId;
					$view = new View();
					$view->viewRender('Account.html',array('errors'=>errors));
				}
				else{
					$errors['loginData'] = 'Incorrect login data';
					$view = new View();
					$view->viewRender('LoginView.html',array('errors'=>errors));
				}

			}
			$view = new View();
			$view->viewRender('LoginView.html');
			return true;
		}
		function actionLogout(){
			session_start();
			unset($_SESSION["user"]);
       		$view = new View();
			$view->viewRender('MainView.html',array('errors'=>errors));
			return true;
		}
	}
?>