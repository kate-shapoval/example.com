<?php
require_once (DEV_ROOT_PATH.'application/models/EventsModel.php');
require_once (DEV_ROOT_PATH.'vendor/autoload.php');
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
	/**
	 * EventsController 
	 */
	class EventsController extends Controller
	{
		/**
		 * View single item of articles by id
		 */
		public function actionView($id)
		{
			if($id)
			{
				$eventItem=array();
				$eventItem = EventsModel::getEventsItemByID($id);
				Twig_Autoloader::register();
				$loader = new Twig_Loader_Filesystem(DEV_ROOT_PATH.'application/views/');
				$twig = new Twig_Environment($loader);
				echo $twig->render('EventView.html',array('root_path'=>DEV_ROOT_PATH, 'event' => $eventItem));
			}
			return true;
		}
		/**
		 * View list articles
		 */
		public function actionIndex()
		{
			$eventsList=array();
			Twig_Autoloader::register();
			$eventsList=EventsModel::getEventsList();
			$loader = new Twig_Loader_Filesystem(DEV_ROOT_PATH.'application/views/');
			$twig = new Twig_Environment($loader);
			echo $twig->render('EventsIndex.html',array('root_path'=>DEV_ROOT_PATH, 'events' => $eventsList));
			return true;
		}
	}
?>
