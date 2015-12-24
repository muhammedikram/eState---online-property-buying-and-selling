<?php
class Company extends \Phalcon\Mvc\Model
{
	
	protected $id;
	protected $name;
	protected $address;
	protected $email;
	protected $company;
	protected $registration_number;
	protected $tax_number;
	protected $currency;
	protected $password;
	protected $confirm_password;
	protected $phone_number;
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
	public function getEmail(){
		return $this->email;
	}
	public function getCompany(){
		return $this->company;
	}
	public function getRegistration_number(){
		return $this->registration_number;
	}
	public function getTax_number(){
		return $this->tax_number;
	}
	public function getCurrency(){
		return $this->currency;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getConfirm_password(){
		return $this->confirm_password;
	}
	public function getPhone_number(){
		return $this->phone_number;
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
	public function setCompany($company){
		$this->name=$company;
	}
	public function setEmail($email){
		$this->email=$email;
	}
	public function setRegistration_number($registration_number){
		$this->registration_number=$registration_number;
	}
	public function setTax_number($tax_number){
		$this->tax_number=$tax_number;
	}
	public function setCurrency($currency){
	$this->currency=$currency;
    }
    public function setPassword($password){
    	$this->password=$password;
    }
    public function setConfirm_password($confirm_password){
    	$this->confirm_password=$confirm_password;
    }
    public function setPhone_number($phone_number){
    	$this->phone_number=$phone_number;
    }

//For update query, we need set new names for the form fields.
//setters for the new update form 
		/*
		public function setupdateId($id)
		$this->id=

      public function setupdateName($name){
	$this->name=$name;

	}
	public function setupdateAddress($address){
	$this->address=$address;
	}

	public function setupdateEmail($email){
		$this->email=$email;
	}

*/
	
}












