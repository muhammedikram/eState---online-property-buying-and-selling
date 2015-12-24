<?php
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\Email;
use Phalcon\Mvc\Model\Message as Message;

class RentsListinings extends \Phalcon\Mvc\Model
 
{

	         
			 protected $propertyID;
			 protected $userID;
			 Protected $created;
			 Protected $enabled;
			 

	
		public function initialize()
		    {

		        $this->belongsTo("userID", "MemberRegister", "id");
				$this->belongsTo("propertyID", "Properties", "propertyID");	
				$this->belongsTo("propertyID", "Rents", "propertyID");	

		        $this->addBehavior(new Timestampable(
		        array(
		            'beforeCreate'  => array(
		                'field'     => 'created',
		                'format'    => 'Y-m-d'
		            )
		        )
		    ));
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
	
    }
		
