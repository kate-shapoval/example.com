<?php
	require_once (DEV_ROOT_PATH.'vendor/autoload.php');
	/**
	 * View
	 */
	class View
	{
		private $twig;
		private static $_instance = null;
		private function __construct() 
		{
			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem(DEV_ROOT_PATH.'application/views/');
			$this->twig = new Twig_Environment($loader);
		}
		private function __clone() {}
		private function __wakeup(){}
		static public function getInstance() 
		{
			if(is_null(self::$_instance))
			{
			self::$_instance = new self();
			}
			return self::$_instance;
		}
		public function viewRender($name, array $paramentrs = [])
		{
			echo $this->twig->render($name,$paramentrs);
		}
	}
?>