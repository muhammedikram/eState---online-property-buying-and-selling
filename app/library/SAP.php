<?php

class SAP
{
	protected $mysql;
	
	
	
	public function __construct($hostname = '', $database = '', $username = '',
			$password = '')
	{
		//TODO Change this to a read-only account?
		$hostname = $hostname ?: 'localhost';
		$database = $database ?: 'estate';
		$username = $username ?: 'root';
		$password = $password ?: '';
		
		$this->mysql = new \MYSQL($hostname, $database, $username, $password);
	}
	
	
	
	private function query($sql)
	{
		@$this->mysql->executeQuery($sql);
		
		return $this->mysql;
	}

	public function getResults()
	{
			$mysql = $this->query(
			'SELECT company.id AS "id", 
			company.name AS "name" 
			FROM company'
			);
		$i = $mysql->fetchAll();
		return $i;
	}
	



		public function getMembers()
	{
		$mysql= $this->query(
			'SELECT members.id AS "id",
			        members.name AS "name"
			  FROM members
			');
			$i = $mysql->fetchAll();
			return $i;			
	}	


	 public function getAllEmployees()
	 {
	 	$mysql=$this->query(
	 		'SELECT 
	 				employees.employeeNumber AS "employeeNumber",
	 				employees.firstName      AS "firstName",
	 				employees.lastName       AS "lastName",
	 				employees.email 		 AS "email"
	 				FROM employees;
	 				');
	 			$employees=$mysql->fetchAll();
	 			return $employees;
	 }
	



public function getemployeesOrders($employeeNumber, $to, $from)
{
		$mysql=$this->query(
					'SELECT 
					employees.employeeNumber   AS "employeeNumber", 
					employees.firstName 		AS "firstName",
					orders.orderNumber			AS "orderNumber",
					orders.orderDate			AS "orderDate",
					orders.status 			     AS "status"
					FROM employees
					INNER JOIN customers ON employees.employeeNumber=customers.salesRepEmployeeNumber
					INNER JOIN orders ON customers.customerNumber=orders.customerNumber
					WHERE employees.employeeNumber = "'.$employeeNumber.'"
					AND orders.orderDate BETWEEN   "'.$from.'"    AND      "'.$to.'"
						');
				 $employeesOrders=$mysql->fetchAll();
				 return $employeesOrders;
}

	


public function getCategory()
{
	$mysql=$this->query(
		'SELECT 
		productlines.productLine AS "category",
		productlines.textDescription AS "description"	
		FROM productlines	

		');
			$category=$mysql->fetchAll();
			return $category;

}






	public function getProducts($category)
	{
		$mysql=$this->query(
				'SELECT 
				productlines.productline AS "category", 
				products.productCode     AS "productCode",
				products.productName     AS"product",
				products.productDescription  AS "description",
				products.buyPrice				AS "price"
				FROM productlines
				INNER JOIN products ON productlines.productLine = products.ProductLine
				WHERE productlines.productline="'.$category.'"

				');
		$products=$mysql->fetchAll();
		return $products;

	}	



	public function getpropertySearch($town, $type, $price)
	{
		$mysql=$this->query(
				'SELECT  
				properties.town AS "town",
				properties.type AS "type",
				properties.street AS "street",
				properties.price AS "price"
				From properties
				Where properties.town = "'.$town.'" 
				AND properties.type = "'.$type.'"
				AND properties.price <=   "'.$price.'"
				');
			$propertySearch =$mysql->fetchAll();
			return $propertySearch;


	}



}
	