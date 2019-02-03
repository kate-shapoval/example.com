<?php
	require_once(DEV_ROOT_PATH.'application/data_base/DbConnection.php');
	require_once(DEV_ROOT_PATH.'application/data_base/entities/Event.php');
	/**
	 * EventsModel
	 */
	class EventsModel
	{
		/**
		 * Return array of events items
		 */
		public static function getEventsList()
		{
			$dbConnection=DbConnection::getInstance()->get();
			
			/*$eventsList=array();
			$dbConnection=DbConnection::getInstance()->get();
			
			$resultQuery=$dbConnection->query('SELECT id, title, date, short_content, author, preview FROM events ORDER BY id ASC LIMIT 10');
			$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
			echo '<pre>';
			print_r($articlesItem);
			echo '</pre>';
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
			return $eventsList;*/
		}
		/**
		 * Return single event items by id
		 * @parametr integer &id
		 */
		public static function getEventsItemByID($id)
		{
			/*$id=intval($id);
			if($id)
			{
				$dbConnection=DbConnection::getInstance()->get();
				
				$resultQuery=$dbConnection->query('SELECT title, date, short_content, content, author, preview FROM articles WHERE id='.$id);
				$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
				$eventsItem=$resultQuery->fetch();
				return $eventsItem;
			}*/
		}
	}
?>