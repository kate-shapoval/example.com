<?php
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
	/**
	 * MainController
	 */
	class ErrorController extends Controller
	{
		
		function actionView()
		{
			View::viewRender('404View.html',array('root_path'=>DEV_ROOT_PATH));
			return true;
		}
	}
?>