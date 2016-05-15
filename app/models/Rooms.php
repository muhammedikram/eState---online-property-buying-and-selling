<?php
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\Email;
use Phalcon\Mvc\Model\Message as Message;

class Rooms extends \Phalcon\Mvc\Model
{
	
	protected $propertyID;
	protected $type;
	protected $description;
	protected $street;
	protected $town;
	protected $postcode;
	protected $county;
	protected $country;
	protected $price;
	protected $bedroom;
	protected $image1;
	protected $created;
	protected $validUntil;
	protected $enabled;
	protected $parking;
	protected $space;
	protected $ready;
	protected $roomavailable;
	protected $roomsize;
	protected $deposit;
	protected $petsallowed;
	protected $minimumcontract;
	protected $smoaking;
	protected $couple;
	protected $userID;




//getters 
public function initialize()
    {

        $this->belongsTo("userID", "MemberRegister", "id");


        $this->addBehavior(new Timestampable(
        array(
            'beforeCreate'  => array(
                'field'     => 'date',
                'format'    => 'd-m-y'
            )
        )
    ));
    }

    public static function findFromURL($propertyID)
	{
		$part = Properties::findFirst(
			array(
				'propertyID = :propertyID:',
				'bind' => array(
					'propertyID' => $propertyID
				)
			)
		);
		
		return $part;
	}


	public function getPropertyID(){
	    return $this->propertyID;
	}
	public function getType(){
	    return $this->type;
	}
	public function getDescription(){
	    return $this->description;
	}
	public function getStreet(){
         return $this->street;
	}
	public function getTown(){
	  return $this->town;
	}
	public function getpostcode(){
	  return $this->postcode;
	}
	
	public function getCounty(){
	  return $this->county;
	}
	public function getCountry(){
	  return $this->country;
	}
	public function getBedroom(){
	  return $this->bedroom;
	}
	public function getPrice(){
	  return $this->price;
	}
	public function getImage1(){
	  return $this->image1;
	}

	public function getCreated(){
	  return $this->created;
	}
	public function getValidUntil(){
	  return $this->validUntil;
	}
	public function getEnabled(){
	  return $this->enabled;
	}
	public function getParking(){
	  return $this->parking;
	}
	public function getSpace(){
	  return $this->space;
	}

	public function getReady(){
	  return $this->ready;
	}
	public function getRoomavailable(){
	  return $this->roomavailable;
	}
	public function getRoomsize(){
	  return $this->roomsize;
	}
	public function getDeposit(){
	  return $this->deposit;
	}
	public function getMinimumcontract(){
	  return $this->minimumcontract;
	}
	public function getSmoaking(){
	  return $this->smoaking;
	}
	public function getCouple(){
	  return $this->couple;
	}

	public function getUserID(){
		return $this->userID;
	}
	public function getPetsallowed(){
		return $this->petsallowed;
	}



	

//setters 
	public function setpropertyID($propertyID){
		$this->productCode=$propertyID;
	}
	public function setType($type){
		$this->type=$type;
	}
	public function setDescription($description){
		$this->description=$description;
	}
	public function setStreet($street){
	$this->street=$street;
	}
	public function setTown($town){
		$this->town=$town;
	}
	public function setPostcode($postcode){
		$this->postcode=$postcode;
	}
	public function setCounty($county){
		$this->county=$county;
	}
	public function setCountry($country){
		$this->country=$country;
	}
	public function setBedroom($bedroom){
		$this->bedroom=$bedroom;
	}
	public function setImage1($image1){
		$this->image1=$image1;
	}
	public function setCreated($created){
		$this->created=$created;
	}
	public function setValidUntil($validUntil){
		$this->validUntil=$validUntil;
	}
	public function SetPrice($price){
		$this->price=$price;
	}
	public function SetEnabled($enabled){
		$this->enabled=$enabled;
	}
	public function setParking($parking){
		$this->parking=$parking;
	}
	public function setSpace($space){
		$this->space=$space;
	}
	public function setReady($ready){
		$this->ready=$ready;
	}
	public function setRoomavailable($roomavailable){
		$this->roomavailable=$roomavailable;
	}
	public function setRoomsize($roomsiz){
		$this->roomsiz=$roomsiz;
	}
	public function setDeposit($deposit){
		$this->deposit=$deposit;
	}
	public function setPetsallowed($petsallowed){
		$this->petsallowed=$petsallowed;
	}
	public function setMinimumcontract($minimumcontract){
		$this->minimumcontract=$minimumcontract;
	}
	public function setSmoaking($smoaking){
		$this->smoaking=$smoaking;
	}
	public function setCouple($couple){
		$this->couple=$couple;
	}
	public function setUserID($userID){
		$this->userID=$userID;
	}


	
}












