<?php
require_once(DEV_ROOT_PATH.'application/data_base/DbConnection.php');
/**
 * DB
 */
class DB
{
	private $dbConnection;
	function __construct() 
	{
		$this->dbConnection = DbConnection::getInstance()->get();
	}
	/* setAttributes */
	public function setAttributes(array $attributes)
	{
		$methods = get_class_methods($this);
		foreach ($attributes as $key => $value) 
		{
			$method ='set'.ucfirst($key);
			if(in_array($method, $methods))
			{
				$this->$method($value);
			}
		}
		return true
	}
	/* fetchAll */
	public function fetchAll()
	{
		$itemsList=array();
		
		$resultQuery=$this->dbConnection->query('SELECT id, title, date, short_content, author, preview FROM '.$this->table. ' ORDER BY id ASC LIMIT 10');
		$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
		$i = 0;
		while( $row = $resultQuery->fetch())
		{
			$temp = new $this();
			$temp->setAttributes($row);
			$itemsList[] = $temp;
		}
	return $itemsList;		
	}
	/* fetchById */
	public function fetchById()
	{
		$resultQuery = $this->dbConnection->query('SELECT title, date, short_content, content, author, preview FROM '.$this->table. 'WHERE id='.$this->getId());
		$resultQuery->setFetchMode(PDO::FETCH_ASSOC);
		return $resultQuery;
	}
	/* insert  */
	public function insert()
	{
		$columns = get_class_vars($this);
		array_shift($columns);
		foreach ($columns as $column) {
			$method = 'get'.ucfirst($column);
			$variable[] = $this->method();
		}
		$this->dbConnection->query("INSERT INTO ".$this->table. " (" .implode(",",$columns).") VALUES ('".implode("','",$variable)."')");
	}
	/* update  */
	public function update()
	{
		$columns = get_class_vars($this);
		array_shift($columns);
		foreach ($columns as $column) {
			$method = 'get'.ucfirst($column);
			$variable[] = $column."='".$this->method()."'";
		}
		if($this->getId()!= null)
		{
			$this->dbConnection->query('UPDATE '.$this->table. 'SET' .implode(',',$variable).'WHERE id='.$this->getId());
			return true;
		}
		return false;
	}
	/* save */
	public function save()
	{
		if ($this->getId() != null)
		{
			$this->update();
		}
		else
		{
			$this->insert();
		}
	}
	/* delete */
	public function delete($id)
	{
		if($this->getId()!= null)
		{
			$this->dbConnection->query('DELETE FROM '.$this->table. 'WHERE id='.$this->getId());
			return true;
		}
		return false;
	}
}
?>