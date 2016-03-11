<?php
class Customers extends \Phalcon\Mvc\Model
{
	
	protected $customerID;
	protected $name;
	protected $email;
	protected $propertyID;

	public function initialize()
		    {
		       $this->belongsTo("propertyID", "Listinings", "propertyID");
		       $this->belongsTo("propertyID", "Viewings", "propertyID");

		    }
//getters for company registeration form
	public function getcustomerID(){
	    return $this->customerID;
	}
	public function getName(){
         return $this->name;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getpropertyID(){
	  return $this->propertyID;
	}

//setters for the company registeration form
	// public function setId($id){
	// 	$this->id=$id;

	// }
	// public function setName($name){
	// $this->name=$name;

	// }
	// public function setAddress($address){
	// $this->address=$address;
	// }
	// public function setSector($sector){
	// $this->sector=$sector;
	// }

	
}












