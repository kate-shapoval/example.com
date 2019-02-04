<?php
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
	/**
	 * UserController
	 */
	class UserController extends Controller
	{
		function actionRegister()
		{
			//View::getInstance()->viewRender('MainView.html',array('root_path'=>DEV_ROOT_PATH));
			return true;
		}
		function actionLogin()
		{
			//View::getInstance()->viewRender('MainView.html',array('root_path'=>DEV_ROOT_PATH));
			return true;
		}
		function actionLogout()
		{
			//View::getInstance()->viewRender('MainView.html',array('root_path'=>DEV_ROOT_PATH));
			return true;
		}
	}
?>