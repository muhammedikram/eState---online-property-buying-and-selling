<?php

namespace File;

/**
 * Wrapper for `fgetcsv()`.
 */
class CSV extends File
{
	private $length;
	private $delimiter;
	private $enclosure;
	private $escape;
	
	private $currentRow;
	private $rowNumber;
	
	
	
	public function __construct($folder, $fileName, $permission = 'r',
			$mustExist = false, $length = 0, $delimiter = ',', $enclosure = '"',
			$escape = '\\')
	{
		parent::__construct($folder, $fileName, $permission, $mustExist);
		
		$this->length    = $length;
		$this->delimiter = $delimiter;
		$this->enclosure = $enclosure;
		$this->escape    = $escape;
		
		$this->rowNumber = 0;
		
		$this->open();
	}
	
	
	
	public function rewind()
	{
		$this->rowNumber = 0;
		
		return rewind($this->handle);
	}
	
	
	
	public function getRow()
	{
		$this->rowNumber++;
		
		return fgetcsv($this->handle, 1000, ',');
	}
	
	public function getRowNumber()
	{
		return $this->rowNumber;
	}
	
	
	
	public function parse($columnNames = array())
	{
		$rows = array();
		
		while (($row = $this->getRow()) !== false) {
			$rows[] = (count($columnNames) > 0)
					? array_combine($columnNames, $row)
					: $row;
		}
		
		return $rows;
	}
	
	
	
	public function save($contents)
	{
		foreach ($contents as $line) {
			fputcsv($this->handle, $line, ',', '"');
		}
	}
}