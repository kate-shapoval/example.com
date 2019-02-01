<?php
	/**
	 * class Config 
	 */
	class Config
	{
		private $config = array();
		private static $_instance = null;
		private function __construct() {}
		protected function __clone() {}
		static public function getInstance() 
		{
			if(is_null(self::$_instance))
			{
			self::$_instance = new self();
			}
			return self::$_instance;
		}
		public function import() {}
		public function get()
		{		
			$this->config=include(DEV_ROOT_PATH.'application/config/routes.php');	
			return $this->config;
		}
	}
?>