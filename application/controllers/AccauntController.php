<?php
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
	/**
	 * AccountController
	 */
	class AccountController extends Controller
	{
		function actionIndex()
		{
			$eventsList=array();
			$eventsList=EventsModel::getEventsList();
			$view = new View();
			$view->viewRender('AccountIndex.html',array('root_path'=>DEV_ROOT_PATH, 'events' => $eventsList));
			return true;
		}
		function actionEdit()
		{
			//View::getInstance()->viewRender('MainView.html',array('root_path'=>DEV_ROOT_PATH));
			return true;
		}
	}
?>