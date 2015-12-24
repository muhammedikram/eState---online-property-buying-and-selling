<?php
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\Email;
use Phalcon\Mvc\Model\Message as Message;

class Rents extends \Phalcon\Mvc\Model
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
	protected $image2;
	protected $image3;
	protected $created;
	protected $validUntil;
	protected $enabled;



//getters 
	public function initialize()
    {
        $this->belongsTo("propertyLine", "propertylines", "propertyLine");


        $this->belongsTo("idprices", "prices", "idprices");

        $this->belongsTo("idimages", "images", "idimages");
        
        $this->hasMany('propertyID', 'Favurites', 'propertyID');

        $this->belongsTo("propertyID", "Listinings", "propertyID");

         $this->belongsTo("propertyID", "RentsListinings", "propertyID");

        $this->addBehavior(new Timestampable(
        array(
            'beforeCreate'  => array(
                'field'     => 'created',
                'format'    => 'Y-m-d'
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
	public function getImage2(){
	  return $this->image2;
	}
	public function getImage3(){
	  return $this->image3;
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
	public function setImage2($image2){
		$this->image2=$image2;
	}
	public function setImage3($image3){
		$this->image3=$image3;
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


	
}












