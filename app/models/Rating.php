<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\Email;
use Phalcon\Mvc\Model\Message as Message;

class Rating extends \Phalcon\Mvc\Model
 
{

	          protected $comments;
			  protected $name;
			  protected $email;
			  protected $rating;
			  protected $date;


			public function initialize()
		    {

		        $this->addBehavior(new Timestampable(
		        array(
		            'beforeCreate'  => array(
		                'field'     => 'created',
		                'format'    => 'Y-m-d'
		            )
		        )
		    ));

		    }
			  
             public function getComments(){
				return $this->comments;
			}
			public function getName(){
				return $this->name;
			}
			public function getEmail(){
				return $this->email;
			}
			public function getRating(){
				return $this->rating;
			}
		

			public function setId($id) {
				$this->id = $id;
			}

			public function setName($name) {
				$this->name = $name;
			}

			public function setEmail($email) {
				$this->email = $email;
			}
			


   
    }
		
