<?php
use Phalcon\Mvc\Model;
class Products extends \Phalcon\Mvc\Model
{
//I have remove productLine because I used Inner join with product lines table. 
	
	protected $productName;
	protected $productScale;
	protected $productVendor;
	protected $productDescription;
	protected $quantityInStock;
	protected $buyPrice;
	protected $MSRP;
	protected $productImage;
	protected $productCode;
//getters for company registeration form
	public function initialize()
	{
		$this->belongsTo('productLine', 'productlines', 'productCode', array(
			'reusable' => true
		));
	}
	public function getproductCode(){
	    return $this->productCode;
	}
	public function getproductName(){
         return $this->productName;
	}

	public function getproductScale(){
	  return $this->productScale;
	}
		public function getproductVendor(){
	  return $this->productVendor;
	}
		public function getproductDescription(){
	  return $this->productDescription;
	}
		public function getquantityInStock(){
	  return $this->quantityInStock;
	}
	public function getbuyPrice(){
	  return $this->buyPrice;
	}
	public function getMSRP(){
		 return $this->MSRP;
	}
	public function getproductImage(){
		 return $this->productImage;
	}
//setters for the company registeration form
	public function setproductCode($productCode){
		$this->productCode=$productCode;

	}
	public function setproductName($productName){
	$this->name=$productName;

	}
	public function setproductLine($productLine){
	$this->address=$productLine;
	}
	public function setproductScale($productScale){
	$this->sector=$productScale;
	}
	public function setproductVendor($productVendor){
	$this->sector=$productVendor;
	}
	public function setproductDescription($productDescription){
	$this->sector=$productDescription;
	}
	public function setquantityInStock($quantityInStock){
	$this->sector=$quantityInStock;
	}
public function setbuyPrice($buyPrice){
	$this->sector=$buyPrice;
	}
public function setMSRP($MSRP){
	$this->sector=$MSRP;
	}
	public function setproductImage($productImage){
	$this->sector=$productImage;
	}


//For update query, we need set new names for the form fields.
//setters for the new update form 



      public function setupdateName($name){
	$this->name=$name;

	}
	public function setupdateAddress($address){
	$this->address=$address;
	}
	public function setupdateSector($sector){
	$this->sector=$sector;
	}

public static function paginateProducts($page = 1, $limit = 20) {

 //perform sanity checks on the limit variable.
$limit = (is_numeric($limit) && $limit > 1) ? $limit  : 10;

//work out the page index.
$pi = (is_numeric($page) && $page > 0) ? 
    ($page > 1) ? ($page - 2) + $limit : 0
    : 0;

$paginationValues = \PaginationHelper::calculatePaginationValues($page, $limit, 5, '\Products');

$data = \Products::find(array(
	'limit' => array(
		'number' => $limit,
		'offset' => $pi
	),

));

$paginationValues['data'] = $data;
return $paginationValues;

}

	
}












