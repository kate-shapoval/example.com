<?php
	require_once (DEV_ROOT_PATH.'vendor/autoload.php');
	/**
	 * View
	 */
	class View
	{
		public function viewRender($name, array $paramentrs = [])
		{
			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem(DEV_ROOT_PATH.'application/views/');
			$twig = new Twig_Environment($loader);
			echo $twig->render($name,$paramentrs);
		}
	}
?>