<?php
class DbConnection
{
	public static function getConnection()
	{
		$parametrsPath=DEV_ROOT_PATH.'application/config/db_parametrs_connection.php';
		
		$paramenrs=include($parametrsPath);

		$dsn="mysql:host={$paramenrs['host']}; dbname={$paramenrs['dbname']}; charset=utf8";
		$dbConnection = new PDO($dsn,$paramenrs['user'],$paramenrs['password']);
		return $dbConnection;
	}
}
?>