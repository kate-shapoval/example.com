<?php
require_once (DEV_ROOT_PATH.'application/models/EventsModel.php');
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
				$eventItem = EventsModel::getEventsItemByID($id);
				View::viewRender('EventView.html',array('root_path'=>DEV_ROOT_PATH, 'event' => $eventItem));
			}
			return true;
		}
		/**
		 * View list articles
		 */
		public function actionIndex()
		{
			$eventsList=array();
			$eventsList=EventsModel::getEventsList();
			View::viewRender('EventsIndex.html',array('root_path'=>DEV_ROOT_PATH, 'events' => $eventsList));
			return true;
		}
	}
?>
