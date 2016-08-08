<?php 
   class Test extends CI_Controller {
  
      public function index() { 

      	//get the view page
      	$this->load->view('test');

      	//lets get the values posted from the form
      	$name = $this->input->post('name');
      	$email = $this->input->post('email');

      	//form process
      	//Call the model first
      	 $this->load->model("Insert"); 
      	 $this->Insert->insertCustomer($name, $email);
            }


      public function edit(){
            $this->load->model('Insert');

            //make an array variable..get the datab from model. and render in view. 

            $data['data'] = $this->Insert->getAccounts();
            $this->load->view('accounts' , $data);




      }

//       public function alljob()
// {
//  $this ->load->model("JobModel");
//  $data['job']=$this->JobModel->getAlljob();
//  $this->load->helper('url');
//   $data ['name']="All the films name";
//    $this->load->view("viewjob",$data); 

// }
} 
 
?>