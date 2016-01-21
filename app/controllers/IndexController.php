<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Filter;
use Phalcon\Mvc\View\Simple as SimpleView;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Model\Query;

class IndexController extends ControllerBase
{

   
     public function indexAction()
    {

       // get all towns of sale properties. 
        $allProperties = Properties::find(
          array(
            'group'=>'town')
          );
             $this->view->properties = $allProperties;

        //get bedroom of sale properties
        $bedroom = Properties::find(
            array('group'=>'bedroom'
            )
        );
        $this->view->propertybedroom=$bedroom;


        //get the type of sale properties
        $type = Properties::find(array('group'=>'type'
            )
        );
         $this->view->propertyType=$type;


         //get the latest properties

         $latestproperties = Properties::find(
                 array(
                    'enabled = :enabled:',
                    'limit' => 5,
                    'bind'=>array(
                    'enabled' => 1
                    )
                )
            );
         $this->view->latestP=$latestproperties;


        // get all towns of rent properties. 
        $allProperties = Rents::find(
          array(
            'group'=>'town')
          );
        $this->view->rentproperties = $allProperties;

        //get bedroom of rent properties
        $bedroom = Rents::find(
            array('group'=>'bedroom'
            )
        );
        $this->view->rentpropertybedroom=$bedroom;

        //get the type of rent properties
        $type = Rents::find(array('group'=>'type'
            )
        );
         $this->view->rentpropertyType=$type;


    } 

    public function searchAction()
   
 	{
        //Get the properties types, towns and bedrooms for refine search function.
          $allProperties = Properties::find(
          array(
            'group'=>'town'));
             $this->view->properties = $allProperties;
        $bedroom = Properties::find(array('group'=>'bedroom'
            )
        );
        $this->view->propertybedroom=$bedroom;

        $type = Properties::find(array('group'=>'type'
            )
        );

         $this->view->propertyType=$type;


         $latestproperties = Properties::find(
                array(
                    'limit' => 5,
                    'order' => 'created DESC'
                    )
                );
         $this->view->latestP=$latestproperties;

         //search for properties 

         //go p sap file
        $sap = new \SAP();
        
        //if reruest is post
            if($this->request->isPost()) {

                $town=$this->request->getPost('town');
                $type=$this->request->getPost('type');
                $price=$this->request->getPost('price');
                $bedroom= $this->request->getPost('bedroom');
    
                $properties= $sap->getpropertySearch($town,$type, $price, $bedroom);

        
            }

                $this->view->propertysearch=$properties;


        
    }

    public function searchrentsAction()
    {
        {
        //Get the properties types, towns and bedrooms for refine search function.
          $allProperties = Rents::find(
          array(
            'group'=>'town'));
             $this->view->properties = $allProperties;
        $bedroom = Rents::find(array('group'=>'bedroom'
            )
        );
        $this->view->propertybedroom=$bedroom;

        $type = Rents::find(array('group'=>'type'
            )
        );

         $this->view->propertyType=$type;


         $latestproperties = Rents::find(
                array(
                    'limit' => 5,
                    'order' => 'created DESC'
                    )
                );
         $this->view->latestP=$latestproperties;


    //search for the properties
        $numberPage = (int) $_GET["page"];
        if ($this->request->getQuery()) {
            $query = Criteria::fromInput($this->di, "Rents", $this->request->getQuery());
            $this->persistent->searchParams = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = array();
        if ($this->persistent->searchParams) {
            $parameters = $this->persistent->searchParams;
        }

        $products = Rents::find($parameters);

        if (count($products) == 0) {
            $this->flash->notice('No products are been found');
            return $this->forward("index");
        }

        $paginator = new Paginator(array(
            "data"  => $products,
            "limit" => 5,
            "page"  => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
        $this->view->products = $products;



        
    }

    }

/**
 * This function will show property details. When somebody will search and click on one item 
 * to view it's detials, thiss function will show the details
 * Also it add product to user favurite
 */
    public function propertydetailsaction()
        {   

             $propertyID = $this->dispatcher->getParam("propertyID");
             
             if (isset($propertyID)) {
                $property = Properties::find(
                    array(
                            'propertyID = :propertyID:',
                            'bind'=>array(
                            'propertyID' => $this->dispatcher->getParam('propertyID'))

                    ));

                     }

                $this->view->properties = $property;

                //get the active session 
                $auth = $this->session->get('auth');
                 
                //checks if user click add to favurite button. I dont want new entry when some boy refresh the page 
                if($this->request->getPost('action') == 'favurite')  {

                //checks if user is logged in. It only allows logged in user to add properties to favurites
                    if(!$auth){
                         $this->flash->notice('You need to be logged in to add product in your favurite');
                    }else{

                    //getting the user id
                    $id = $auth['id'];

                    //Getting the property number from url. I have got route added on index.php
                    $propertyID= $this->dispatcher->getParam("propertyID");
                    
                    //calls the favurite class
                    $f = new Favurites(); 

                    //save id and propertyid into favurite table
                    $f->setId($id);
                    $f->setpropertyID($propertyID);
              
                    $f->save();

                    //flash success message
                    $this->flash->success('property '  .$propertyID. ' has been added to your favurites');
                }
             }          
             //checks if the send button is been clicked..If it's clicked, go to the next step, otherwise ourput error

             if($this->request->getPost('newEmail') == 'email') 
                {
                    $property = Properties::findFromURL($propertyID);
    
                     $send= $this->request->getPost('sendEmail');

                //Get email address to send to 
                    $mail = new \Mail\Mail();

                    $mail->setFrom('admin@properties.com', 'Muhammed Ikram');

                    $mail->setTo($send);

                    $mail->setSubject('Property details');

                    $mail->setBodyText("Property ID". " "    .$property->getpropertyID());

                    $mail->send();

                    $this->flash->success('Email been sent'); 

                }//Close emailing
            
        }//end of propertydetails function

public function rentpropertydetailsaction()
        {   

             $propertyID = $this->dispatcher->getParam("propertyID");
             
             if (isset($propertyID)) {
                $property = Rents::find(
                    array(
                            'propertyID = :propertyID:',
                            'bind'=>array(
                            'propertyID' => $this->dispatcher->getParam('propertyID'))

                    ));

                     }

                $this->view->properties = $property;

                //get the active session 
                $auth = $this->session->get('auth');
                 
                //checks if user click add to favurite button. I dont want new entry when some boy refresh the page 
                if($this->request->getPost('action') == 'favurite')  {

                //checks if user is logged in. It only allows logged in user to add properties to favurites
                    if(!$auth){
                         $this->flash->notice('You need to be logged in to add product in your favurite');
                    }else{

                    //getting the user id
                    $id = $auth['id'];

                    //Getting the property number from url. I have got route added on index.php
                    $propertyID= $this->dispatcher->getParam("propertyID");
                    
                    //calls the favurite class
                    $f = new Favurites(); 

                    //save id and propertyid into favurite table
                    $f->setId($id);
                    $f->setpropertyID($propertyID);
              
                    $f->save();

                    //flash success message
                    $this->flash->success('property '  .$propertyID. ' has been added to your favurites');
                }
             }          
             //checks if the send button is been clicked..If it's clicked, go to the next step, otherwise ourput error

             if($this->request->getPost('newEmail') == 'email') 
                {
                    $property = Rents::findFromURL($propertyID);
    
                     $send= $this->request->getPost('sendEmail');

                //Get email address to send to 
                    $mail = new \Mail\Mail();

                    $mail->setFrom('admin@properties.com', 'Muhammed Ikram');

                    $mail->setTo($send);

                    $mail->setSubject('Property details');

                    $mail->setBodyText("Property ID". " "    .$property->getpropertyID());

                    $mail->send();

                    $this->flash->success('Email been sent'); 

                }//Close emailing
            
        }//end of propertydetails function


    public function contactAction()
    {
        $propertyID= $this->dispatcher->getParam("propertyID");
        

        //once the form is completed and sent, add entry in database.
        $request = $this->request;
        if ($request->isPost()) {

            $cName = $request->getPost('name');
            $cemail = $request->getPost('email');
            $cNumber = $request->getPost('number');
            $cMessage = $request->getPost('message');

            die(var_dump($cName));
      
            $user = new Contacts();
        
            $user->name = $cName;
            $user->email = $cemail;
            $user->number = $cNumber;
            $user->message = $cMessage;
            $user->propertyID = $propertyID;

            $user->save(); 

            //send email here.
            //send from email would be email address from above form. 
            //send to address would be get the propertyID from url, check which ure added it and get his email address.
                
                $property = Properties::findFromURL($propertyID);

                //Get email address to send to 
                    $mail = new \Mail\Mail();

                    $mail->setFrom($cemail ,$cemail);//gets email from the form sent

                    //get the email of person who added the listining and email them
                    $mail->setTo($property->getListinings()->getMemberRegister()->getEmail());


                    $mail->setSubject('Property details');

                    $mail->setBodyText($cMessage);

                    $mail->send();

                    $this->flash->success('Email been sent'); 
            
            return $this->forward("index/propertydetails/".$propertyID);
            
                }
        }

  
    //this method will handle reviews processed by customers. 
        public function customerReviewsAction()
        {
            

        }

        //arrange viewing method

        // public function arrangeviewingsAction()
        // {
        //     $propertyID= $this->dispatcher->getParam("propertyID");

        //      $properties = Properties::find(
        //         array(
        //                     'propertyID = :propertyID:',
        //                     'bind'=>array(
        //                     'propertyID' => $propertyID

        //                     )
        //                 )
        //             );
        //      $this->view->arrangeviewproperties = $properties;

        // }


        public function mysearchAction()
        {
                $sap = new \SAP();
        
            if($this->request->isPost()) {

                $town=$this->request->getPost('town');
                $type=$this->request->getPost('type');
                $price=$this->request->getPost('price');
    
                $properties= $sap->getpropertySearch($town,$type, $price);

                $this->view->propertysearch=$properties;
        
            }
            
        }
   
}//end of class


        // ->setBody('Here is the <strong>message</strong> itself. It can be text or <h1>HTML</h1>.', 'text/html');
