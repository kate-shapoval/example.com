<?php
	require_once(DEV_ROOT_PATH.'application/core/DbModel.php');
	/**
	 * Events
	 */
	class Events extends DbModel{
		/**
		 * Return array of events items
		 */
		public static function getEventsList(){
			 
			
			$eventsList = array();
			$dbConnection = Parent::getConnection();
			$resultQuery = $dbConnection->query('SELECT e.id, e.title, e.start_date, e.short_content, u.name, e.preview FROM events e LEFT JOIN users u ON e.id_author = u.id ORDER BY e.start_date ASC LIMIT 10');
			$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
			$i = 0;
			while( $row = $resultQuery->fetch()) {
				$eventsList[$i]['id'] = $row['id'];
				$eventsList[$i]['title'] = $row['title'];
				$eventsList[$i]['start_date'] = $row['start_date'];
				$eventsList[$i]['short_content'] = $row['short_content'];
				$eventsList[$i]['author'] = $row['name'];
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
				
				$resultQuery=$dbConnection->query('SELECT e.id, e.title, e.start_date, e.content, u.name, e.preview FROM events e LEFT JOIN users u ON e.id_author = u.id WHERE e.id='.$id);
				$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
				$eventsItem=$resultQuery->fetch();
				return $eventsItem;
			}
		}
	}
?>