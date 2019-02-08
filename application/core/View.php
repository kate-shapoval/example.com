<?php
	require_once (DEV_ROOT_PATH.'vendor/autoload.php');
	/**
	 * View
	 */
	class View{
		private static $twig;
		function __construct(){
			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem(DEV_ROOT_PATH.'application/views/');
			self::$twig = new Twig_Environment($loader);
		}
		public function viewRender($name, array $paramentrs = []){
			echo self::$twig->render($name,$paramentrs);
			return true;
		}
	}
?>