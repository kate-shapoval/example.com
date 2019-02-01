<?php
	require_once(DEV_ROOT_PATH.'application/core/Router.php');
	/**
	 * Controller
	 */
	class Controller
	{
		protected $router;
		function __construct()
		{
			$this->router = new Router();
		}
	}
?>