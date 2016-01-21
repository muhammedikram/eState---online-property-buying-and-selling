<?php

class Contacts extends \Phalcon\Mvc\Model
 
{

	         protected $contactID;
			 protected $name;
			 protected $email;
			 Protected $number;
			 Protected $message;
			 Protected $propertyID;
	
public function initialize()
    {
        $this->hasMany('propertyID', 'properties', 'propertyID', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used in Products'
        	)
        ));
    }



             public function getContactID(){
				return $this->contactID;
			}
			public function getName(){
				return $this->name;
			}

			public function getEmail(){
				return $this->email;
			}
			public function getNumber(){
				return $this->number;
			}
			public function getMessage(){
				return $this->message;
			}
			public function getPropertyID(){
				return $this->propertyID;
			}


			public function setContactID($contactID) {
				$this->id = $contactID;
			}

			public function setName($name) {
				$this->id = $name;
			}

			public function setEmail($email) {
				$this->name = $email;
			}
			
				public function setNumber($number) {
				$this->name = $number;
			}
			

			public function setMessage($message) {
				$this->name = $message;
			}
			public function setPropertyID($propertyID) {
				$this->name = $propertyID;
			}

   
    }
		
