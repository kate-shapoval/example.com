<?php
	/**
	 * class Config 
	 */
	class Config
	{
		public function getConfig()
		{			
			$routesPath =DEV_ROOT_PATH.'application/config/routes.php';
			$routes=include($routesPath);
			return $routes;
		}
	}
?>