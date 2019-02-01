<?php
require_once (DEV_ROOT_PATH.'vendor/autoload.php');
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
	/**
	 * MainController
	 */
	class ErrorController extends Controller
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