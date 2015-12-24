<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;
use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;
use Phalcon\Mvc\Model\Message as Message;

class MemberRegister extends \Phalcon\Mvc\Model
{
   			
        	 public $id;
			 public $name;
			 public $email;
			 public $password;
			 public $confirm_password;


		public function initialize()
    {
        $this->hasMany('id', 'Listinings', 'userID', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used in Products'
        	)
        ));

         $this->hasMany('id', 'RentsListinings', 'userID', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used in Products'
        	)
        ));
    }
			  
             public function getId(){
				return $this->id;
			}
			public function getName(){
				return $this->name;
			}
			public function getEmail(){
				return $this->email;
			}
			public function getpassword(){
				return $this->password;
			}
			public function getconfirm_password(){
				return $this->confirm_password;
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
			public function setpassword($password) {
				$this->password = $password;
			}
			public function setconfirm_password($confirm_password) {
				$this->confirm_password = $confirm_password;
			}
			
    public function validation()
    {
        $this->validate(new EmailValidator(array(
            'field' => 'email'
        )));
        $this->validate(new UniquenessValidator(array(
            'field' => 'email'
         
            
        )));   return $message;
        $this->validate(new UniquenessValidator(array(
            'field' => 'name',
            'message' => 'Sorry, That username is already taken'
        )));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }
   
}


