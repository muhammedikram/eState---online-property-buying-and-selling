<?php
use Phalcon\Mvc\Model\Validator\Uniqueness as Uniqueness;

class Favurites extends \Phalcon\Mvc\Model
{
	
	protected $favuriteID;
	protected $id;
	protected $propertyID;


public function initialize()
       {
        $this->belongsTo("propertyID", "Properties", "propertyID");
        $this->belongsTo("propertyID", "Rents", "propertyID");

    	}

public function validation()
  {
      $this->validate(new Uniqueness(array(
          'field' => 'propertyID'
      )));
      if ($this->validationHasFailed() == true) {
          echo "This product is already exist in your favurite";
      }
  }


//getters for company registeration form
	public function getfavuriteID(){
	    return $this->favuriteID;
	}
	public function getId(){
         return $this->id;
	}
	public function getpropertyID(){
		return $this->propertyID;
	}

//setters for the company registeration form
	public function setfavuriteID($favuriteID){
	$this->address=$favuriteID;
	}

	public function setId($id){
		$this->id=$id;

	}
	public function setpropertyID($propertyID){
	$this->propertyID=$propertyID;

	}

	
//For update query, we need set new names for the form fields.
//setters for the new update form 

	
}












