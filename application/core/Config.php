<?php
	/**
	 * class Config 
	 */
	class Config{
		public static function get($config){			
			$pathConfig=DEV_ROOT_PATH.'application/config/'.$config.'.php';	
			if(file_exists($pathConfig)){
				return require_once($pathConfig);
			}
		}
	}
?>