<?php

class MYSQL
{
	protected $hostname;
	protected $database;
	protected $username;
	protected $password;
	
	protected $connection;
	
	protected $result;
	protected $numReg;
	
	
	
	function __construct($hostname, $database, $username, $password)
	{
		$this->database = $database;
		$this->hostname = $hostname;
		$this->username = $username;
		$this->password = $password;
		
		$this->connect();
	}
	
	
	
	function connect()
	{
		$this->connection = mysql_connect($this->hostname, $this->username, $this->password);
		
		if (!$this->connection) {
			throw new Exception('mysql exception: ' . mysql_get_last_message());
		}
		
		if ($this->connection) {
			mysql_select_db($this->database, $this->connection);
		}
	}
	
	function disconnect()
	{
		return @mysql_close($this->connection);
	}
	
	function __destruct()
	{
		return $this->disconnect();
	}
	
	
	
	function executeQuery($sql)
	{
		$result = @mysql_query($sql);
		
		if (!$result) {
			throw new Exception('mysql exception: ' . mysql_get_last_message());
		}
		
		$this->result = $result;
		$this->numReg = mysql_num_rows($this->result);
		
		return true;
	}
	
	
	
	function fetchRow()
	{
		return mysql_fetch_row($this->result);
	}
	
	function fetchAll()
	{
		$array = array();
		
		while ($row = $this->fetchAssoc()) {
			$array[] = $row;
		}
		
		return $array;
	}
	
	function result($row, $field)
	{
		return mysql_result($this->result, $row, $field);
	}
	
	function fetchArray()
	{
		return mysql_fetch_array($this->result);
	}
	
	function fetchAssoc()
	{
		if (!$this->result) {
			die('mysql error: ' . mysql_get_last_message());
		}
		
		return @mysql_fetch_assoc($this->result);
	}
	
	function affectedRows()
	{
		return mysql_rows_affected($this->result);
	}
	
	function numRows()
	{
		return mysql_num_rows($this->result);
	}
	
	function freeResult()
	{
		return mysql_free_result($this->result);
	}
}