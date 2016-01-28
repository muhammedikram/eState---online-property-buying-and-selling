<?php

class Images extends \Phalcon\Mvc\Model
 
{

	         protected $idimages;
			 protected $image1;
			 protected $image2;
			 protected $image3;
			 protected $propertyID;
	
public function initialize()
    {
        $this->hasMany('propertyID', 'properties', 'propertyID', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used in Products'
        	)
        ));
    }



             public function getidimages(){
				return $this->idimages;
			}
			public function getimage1(){
				return $this->image1;
			}

			public function getimage2(){
				return $this->image2;
			}

			public function getimage3()
			{
				return $this->$image3;
			}

			public function getPropertyID()
			{
				return $this->$propertyID;
			}

			public function setidimages($idprices) {
				$this->id = $idimages;
			}

			public function setimage1($image1) {
				$this->id = $image1;
			}

			public function setimage2($image2) {
				$this->name = $image2;
			}
			public function setimage3($image3) {
				$this->name = $image3;
			}
			public function setPropertyID($propertyID) {
				$this->name = $propertyID;
			}

   
    }
		
