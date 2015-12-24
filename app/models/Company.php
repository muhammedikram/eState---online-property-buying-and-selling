<?php
class Company extends \Phalcon\Mvc\Model
{
	
	protected $id;
	protected $name;
	protected $address;
	protected $sector;
//getters for company registeration form
	public function getId(){
	    return $this->id;
	}
	public function getName(){
         return $this->name;
	}
	public function getAddress(){
		return $this->address;
	}
	public function getSector(){
	  return $this->sector;
	}

//setters for the company registeration form
	public function setId($id){
		$this->id=$id;

	}
	public function setName($name){
	$this->name=$name;

	}
	public function setAddress($address){
	$this->address=$address;
	}
	public function setSector($sector){
	$this->sector=$sector;
	}


//For update query, we need set new names for the form fields.
//setters for the new update form 



      public function setupdateName($name){
	$this->name=$name;

	}
	public function setupdateAddress($address){
	$this->address=$address;
	}
	public function setupdateSector($sector){
	$this->sector=$sector;
	}

	
}












