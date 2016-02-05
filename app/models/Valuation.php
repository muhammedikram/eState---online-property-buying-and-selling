<?php
class Valuation extends \Phalcon\Mvc\Model
{
	
	protected $valuationID;
	protected $propertyID;
	protected $date;
	protected $enabled;

	public function getValuationID(){
	    return $this->valuationID;
	}
	public function getPropertyID(){
         return $this->propertyID;
	}
	public function getDate(){
		return $this->date(DD "/" MM "/" YY);
	}
	public function getEnabled(){
	  return $this->enabled;
	}

	public function setValuationID($valuationID){
		$this->valuationID=$valuationID;

	}
	public function setPropertyID($propertyID){
	$this->propertyID=$propertyID;

	}
	public function setDate($date){
	$this->date=$date;
	}
	public function setEnabled($enabled){
	$this->enabled=$enabled;
	}

	
}












