<?php
	/**
	 * class Config 
	 */
	class Config
	{
		private $config = array();
		private static $_instance = null;
		private function __construct() 
		{
			$this->config=include(DEV_ROOT_PATH.'application/config/routes.php');
		}
		protected function __clone() {}
		private function __wakeup(){}
		static public function getInstance() 
		{
			if(is_null(self::$_instance))
			{
			self::$_instance = new self();
			}
			return self::$_instance;
		}
		public function get()
		{		
			return $this->config;
		}
	}
?>