<?php
require_once DEV_ROOT_PATH.'vendor/autoload.php';
	/**
	 * MainController
	 */
	class ErrorController
	{
		
		function actionView()
		{
			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem(DEV_ROOT_PATH.'application/views/');
			$twig = new Twig_Environment($loader);
			echo $twig->render('404View.html',array('root_path'=>DEV_ROOT_PATH));
			return true;
		}
	}
?>