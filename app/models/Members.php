<?php

class Members extends \Phalcon\Mvc\Model
 
{

	         protected $id;
			  protected $name;
			  protected $email;
			  
             public function getId(){
				return $this->id;
			}
			public function getName(){
				return $this->name;
			}
			public function getEmail(){
				return $this->email;
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
		
