<?php
require_once (DEV_ROOT_PATH.'application/models/Events.php');
require_once (DEV_ROOT_PATH.'application/core/Controller.php');
require_once (DEV_ROOT_PATH.'application/core/View.php');
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
				$eventItem = Events::getEventsItemByID($id);
				$view = new View();
				$view->viewRender('EventView.html',array('root_path'=>DEV_ROOT_PATH, 'event' => $eventItem));
			}
			return true;
		}
		/**
		 * View list articles
		 */
		public function actionIndex()
		{
			$eventsList=array();
			$eventsList=Events::getEventsList();
			$view = new View();
			$view->viewRender('EventsIndex.html',array('root_path'=>DEV_ROOT_PATH, 'events' => $eventsList));
			return true;
		}
	}
?>
