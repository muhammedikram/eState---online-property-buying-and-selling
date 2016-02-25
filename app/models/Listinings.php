<?php
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\Email;
use Phalcon\Mvc\Model\Message as Message;

class Listinings extends \Phalcon\Mvc\Model
 
{

	         protected $listiningID;
			 protected $propertyID;
			 protected $userID;
			 Protected $created;
			 Protected $enabled;
			 Protected $street;
			 Protected $town;
			 Protected $description;

	
public function initialize()
    {

        $this->belongsTo("userID", "MemberRegister", "id");
		$this->belongsTo("propertyID", "Properties", "propertyID");	
		$this->belongsTo("propertyID", "Rents", "propertyID");	
		$this->belongsTo("propertyID", "Viewings", "propertyID");



        $this->addBehavior(new Timestampable(
        array(
            'beforeCreate'  => array(
                'field'     => 'created',
                'format'    => 'Y-m-d'
            )
        )
    ));
    }



            public function getListiningID(){
				return $this->listiningID;
			}
			public function getuserID(){
				return $this->userID;
			}

			public function getCreated(){
				return $this->created;
			}
			public function getEnabled(){
				return $this->enabled;
			}
			public function getPropertyID(){
				return $this->propertyID;
			}
			public function getStreet(){
				return $this->street;
			}
			public function getTown(){
				return $this->town;
			}
			public function getDescription(){
				return $this->description;
			}


			public function setlistiningID($listiningID) {
				$this->id = $listiningID;
			}

			public function setuserID($userID) {
				$this->id = $userID;
			}

			public function setCreated($created) {
				$this->created = $created;
			}
			public function setEnabled($enabled) {
				$this->enabled = $enabled;
			}
			public function setPropertyID($propertyID) {
				$this->propertyID = $propertyID;
			}
			public function setStreet($street) {
				$this->street = $street;
			}
			public function setTown($town) {
				$this->town = $town;
			}
			public function setDescription($description) {
				$this->description = $description;
			}

   
    }
		
