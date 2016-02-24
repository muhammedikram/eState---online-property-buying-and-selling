<?php

class Viewings extends \Phalcon\Mvc\Model
 
{

	         protected $viewingID;
	         Protected $propertyID;
	         protected $customerID;
			 protected $name;
			 protected $email;
			 Protected $telephone;
			 Protected $message;
			 protected $date;
			 protected $time;
			 Protected $enabled
	
public function initialize()
    {
        $this->hasMany('propertyID', 'properties', 'propertyID', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used in Products'
        	)
        ));
    }



            public function getViewingID(){
				return $this->viewingID;
			}
			 public function getCustomerID(){
				return $this->customerID;
			}
			public function getName(){
				return $this->name;
			}

			public function getEmail(){
				return $this->email;
			}
			public function getTelephone(){
				return $this->telephone;
			}
			public function getMessage(){
				return $this->message;
			}
			public function getPropertyID(){
				return $this->propertyID;
			}
			public function getDate(){
				return $this->date;
			}
			public function getTime(){
				return $this->time;
			}
			public function getEnabled(){
				return $this->enabled;
			}


			public function setViewingID($viewingID) {
				$this->viewingID = $viewingID;
			}
			public function setCustomerID($customerID) {
				$this->customerID = $customerID;
			}

			public function setName($name) {
				$this->name = $name;
			}

			public function setEmail($email) {
				$this->email = $email;
			}
			
				public function setTelephone($telephone) {
				$this->telephone = $telephone;
			}
			

			public function setMessage($message) {
				$this->message = $message;
			}
			public function setPropertyID($propertyID) {
				$this->propertyID = $propertyID;
			}
			public function setDate($date) {
				$this->date = $date;
			}
			public function setTime($time) {
				$this->time = $time;
			}
			public function setEnabled($enabled) {
				$this->enabled = $enabled;
			}

   
    }
		
