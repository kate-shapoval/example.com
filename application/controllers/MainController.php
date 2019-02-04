<?php
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
	/**
	 * MainController
	 */
	class MainController extends Controller
	{
		
		function actionView()
		{
			$view = new View();
			$view->viewRender('MainView.html',array('root_path'=>DEV_ROOT_PATH));
			return true;
		}
	}
?>