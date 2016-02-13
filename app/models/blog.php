<?php

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Blog extends \Phalcon\Mvc\Model
{
	
	protected $blogID;
	protected $name;
	protected $position;
	protected $title;
	protected $date;
	protected $description;
	protected $image1;
	protected $image2;

public function initialize()
    {


        $this->addBehavior(new Timestampable(
        array(
            'beforeCreate'  => array(
                'field'     => 'date',
                'format'    => 'd-m-y'
            )
        )
    ));
    }

//getters for blog
	public function getblogID(){
	    return $this->id;
	}
	public function getName(){
         return $this->name;
	}
	public function getPosition(){
		return $this->position;
	}
	public function getTitle(){
	  return $this->title;
	}
	public function getDate(){
	  return $this->date;
	}
	public function getDescription(){
	  return $this->description;
	}
	public function getImage1(){
	  return $this->image1;
	}
	public function getImage2(){
	  return $this->image2;
	}

//setters for the blog
	public function setblogID($blogID){
		$this->blogID=$blogID;

	}
	public function setName($name){
	$this->name=$name;

	}
	public function setPosition($position){
	$this->position=$position;
	}
	public function setTitle($title){
	$this->title=$title;
	}
	public function setDate($date){
	$this->date=$date;
	}
	public function setDescription($description){
	$this->description=$description;
	}
	public function setImage1($image1){
	$this->image1=$image1;
	}
	public function setImage2($image2){
	$this->image2=$image2;
	}


	
}












