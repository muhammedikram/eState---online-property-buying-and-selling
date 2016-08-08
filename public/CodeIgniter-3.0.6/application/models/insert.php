<?php
class Insert extends CI_Model{

      public function index(){ 
			
		} 


 function insertCustomer($name, $email) 
 { 
 $newcustomer=array("name"=>$name,"email"=>$email); 
 return $this->db->insert('reg', $newcustomer); 
 }

 public function getAccounts(){
 	$query = $this->db->get('reg');
 	return $query->result(); 
 }
 

 
 


}
