<?php

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Valuation extends \Phalcon\Mvc\Model
{
	
	protected $valuationID;
	protected $propertyID;
	protected $date;
	protected $enabled;
	protected $userID;


public function initialize()
    {

        $this->belongsTo("userID", "MemberRegister", "id");
       	$this->hasOne("propertyID", "Properties", "propertyID");


        $this->addBehavior(new Timestampable(
        array(
            'beforeCreate'  => array(
                'field'     => 'date',
                'format'    => 'd-m-y'
            )
        )
    ));
    }

	public function getValuationID(){
	    return $this->valuationID;
	}
	public function getPropertyID(){
         return $this->propertyID;
	}
	public function getDate(){
		return $this->date;
	}
	public function getEnabled(){
	  return $this->enabled;
	}
	public function getuserID(){
	  return $this->userID;
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
	public function setuserID($userID){
	$this->enabled=$userID;
	}

	
}












