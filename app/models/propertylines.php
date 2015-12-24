<?php

class propertylines extends \Phalcon\Mvc\Model
 
{

	         protected $propertyLine;
			 protected $url;
			 protected $description;
	
public function initialize()
    {
        $this->hasMany('propertyLine', 'properties', 'propertyline', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used in Products'
        	)
        ));
    }



             public function getpropertyLine(){
				return $this->propertyLine;
			}
			public function getUrl(){
				return $this->url;
			}

			public function getDescription(){
				return $this->description;
			}
			public function setpropertyLine($propertyLine) {
				$this->id = $ty;
			}

			public function setDescription($description) {
				$this->id = $description;
			}

			public function setUrl($url) {
				$this->name = $url;
			}

   
    }
		
