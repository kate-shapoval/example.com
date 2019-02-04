<?php
require_once (DEV_ROOT_PATH.'application/core/Config.php');
	/**
	 * class Config 
	 */
	class DbConnection{
		private $dbConnection;
		private static $_instance = null;
		private function __construct(){
			$paramenrs=Config::get('db_parametrs_connection');
			$dsn="mysql:host={$paramenrs['host']}; dbname={$paramenrs['dbname']}; charset=utf8";
			$this->dbConnection = new PDO($dsn,$paramenrs['user'],$paramenrs['password']);
		}
		private function __clone() {}
		private function __wakeup(){}
		static public function getInstance(){
			if(is_null(self::$_instance)){
			self::$_instance = new self();
			}
			return self::$_instance;
		}
		public function get(){
			return $this->dbConnection;
		}
	}
?>