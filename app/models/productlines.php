<?php

class productlines extends \Phalcon\Mvc\Model
 
{

	         protected $productLine;
			 protected $textDescription;
	


 public function initialize()
    {
        $this->hasMany("propertyLine", "properties", "propertyLine");
    }


             public function getproductLine(){
				return $this->productLine;
			}
			public function gettextDescription(){
				return $this->textDescription;
			}

			public function setproductLine($ProductLine) {
				$this->id = $ProductLine;
			}

			public function settextDescription($textDescription) {
				$this->name = $textDescription;
			}

   
    }
		
