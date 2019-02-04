<?php
	require_once(DEV_ROOT_PATH.'application/core/DbModel.php');
	/**
	 * EventsModel
	 */
	class EventsModel extends DbModel{
		/**
		 * Return array of events items
		 */
		public static function getEventsList(){
			
			
			$eventsList = array();
			$dbConnection = Parent::getConnection();
			$resultQuery=$dbConnection->query('SELECT id, id_author_fk, title, short_content, preview FROM events ORDER BY id ASC LIMIT 10');
			$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
			$i = 0;
			while( $row = $resultQuery->fetch()) {
				$eventsList[$i]['id'] = $row['id'];
				$eventsList[$i]['title'] = $row['title'];
				$eventsList[$i]['date'] = $row['date'];
				$eventsList[$i]['author'] = $row['author'];
				$eventsList[$i]['short_content'] = $row['short_content'];
				$eventsList[$i]['preview'] = $row['preview'];
				$i++;
			}
			return $eventsList;
		}
		/**
		 * Return single event items by id
		 * @parametr integer &id
		 */
		public static function getEventsItemByID($id){
			$id=intval($id);
			if($id)
			{
				$dbConnection = Parent::getConnection();
				
				$resultQuery=$dbConnection->query('SELECT id_author_fk, title, content, preview FROM events WHERE id='.$id);
				$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
				$eventsItem=$resultQuery->fetch();
				return $eventsItem;
			}
		}
	}
?>