<?php

class prices extends \Phalcon\Mvc\Model
 
{

	         protected $idprices;
			 protected $price;
			 protected $valid_till;
	
public function initialize()
    {
        $this->hasMany('idprices', 'properties', 'idprices', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used in Products'
        	)
        ));
    }



             public function getidprices(){
				return $this->idprices;
			}
			public function getprice(){
				return $this->price;
			}

			public function getvalid_till(){
				return $this->valid_till;
			}
			public function setidprices($idprices) {
				$this->id = $idprices;
			}

			public function setprices($prices) {
				$this->id = $prices;
			}

			public function setvalid_till($valid_till) {
				$this->name = $valid_till;
			}

   
    }
		
