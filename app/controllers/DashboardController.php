<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Mvc\Model\Query;

class DashboardController extends ControllerBase

{
	
			Public function indexAction()
			{
                $alltheproperties = properties::find();
                $this->view->allproperties = $alltheproperties;

                $rent = Rents::find();
                $this->view->allrent = $rent;

			}

            public function propertydataAction()
            {
                
            }

            public function addpropertyAction()
            
    {

            //get active session
             $auth = $this->session->get('auth');
           
             //get the active user. properties will be display based on his ID
             $loggedInUser = $auth['id'];

             $request = $this->request;
            if ($request->isPost()) {

            $pPropertyID = rand(200,100);
            $pPurpose = $request->getPost('purpose');
            $pStreet = $request->getPost('street');
            $pTown = $request->getPost('town');
            $pPostcode = $request->getPost('postcode');
            $pCounty = $request->getPost('county');
            $pType = $request->getPost('type');
            $pBedrooms = $request->getPost('bedroom');
            $pDescription = $request->getPost('description');
            $pPrice = $request->getPost('price');
            $pValidUntil = $request->getPost('validUntil');
             // var_dump($_FILES);
           // Check if the user has uploaded files
        if ($this->request->hasFiles() == true) {
            $baseLocation = '/veryproperty/public/images/';

            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {
               
            $file->moveTo($baseLocation . $file->getName());

            //if the user is selling property, add the entry in properties table.
            if($pPurpose == 'sell'){
            $user = new Properties();
            }

            //if the user is selling for rent, add the entry in rents table. 
            if($pPurpose == 'rent'){
            $user = new Rents();
            }
            $user->propertyID = $pPropertyID;
            $user->street = $pStreet;
            $user->town = $pTown;
            $user->postcode = $pPostcode;
            $user->type = $pType;
            $user->bedroom = $pBedrooms;
            $user->description = $pDescription;
            $user->validUntil = $pValidUntil;
            $user->image1 = $file->getName();
             
            $file->moveTo($baseLocation . $file->getName());
           
            //Before Save, Check if this property already exists in the system
             $exitProperty = Properties::findfirst(
                array(
                    'street = :street:',
                    'bind' => array(
                        'street' => $pStreet
                        )
                    )
                );

             $exitProperty = \Rents::findfirst(
                array(
                    'street = :street:',
                    'bind' => array(
                        'street' => $pStreet
                        )
                    )
                );
            if($exitProperty)
            {
                $this->flashSession->error($user->street=$pStreet. " "."already exists in system");
            }else{


            //save property
             $user->save();


             //add entry in listining table
            if($pPurpose == "sell")
            {
            $listining = new Listinings();
            $listining->propertyID = $pPropertyID;
            $listining->userID = $loggedInUser;
            $listining->enabled = 0;
            $listining->save();
            }

               //add entry in listining table
            if($pPurpose == "rent")
            {
            $listining = new RentsListinings();
            $listining->propertyID = $pPropertyID;
            $listining->userID = $loggedInUser;
            $listining->enabled = 0;
            $listining->save();
            }
            
        
            $this->flash->success($user->street=$pStreet. " "."has been successfully saved");
            
            return $this->forward("account/addproperty");
            
                }
            }
          }   

    }
}


     

    
        public function enablePropertyAction()
        {

        

        $enabled = 0;

        $notenabled = Listinings::find(
            array(
                'enabled = :enabled: ',
                'bind' => array (
                    'enabled' => $enabled
                    )
                )
            );
        $this->view->notenabledproperties = $notenabled;


        //this will get rents properties
         $enabled = 0;

        $notenabledRents = RentsListinings::find(
            array(
                'enabled = :enabled: ',
                'bind' => array (
                    'enabled' => $enabled
                    )
                )
            );
        $this->view->notenabledrentsproperties = $notenabledRents;

        }

        public function approvepropertyAction()
        {
           $propertyID = $this->dispatcher->getParam('propertyID');

             $ud = Listinings::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );
   
            $this->view->ud = $ud;  

             $rd = Properties::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );

            if ($this->request->getPost('street')) {
            if ($this->request->getPost('town')) {
                
            $rd->setStreet($this->request->getPost('street'));
            $rd->setTown($this->request->getPost('town'));
            $rd->setPostcode($this->request->getPost('postcode'));
            $rd->setBedroom($this->request->getPost('bedroom'));
            $rd->setCounty($this->request->getPost('county'));
            $rd->setDescription($this->request->getPost('description'));
            $rd->setEnabled(1);
            

            $ud->setEnabled(1);
            $ud->save();

          
            $rd->save();
            $this->flashSession->success(
                    $rd->getStreet() . ' has been successfully approved and now is live on system.'
                );

            return $this->response->redirect(
                    '/dashboard/enableProperty/'
                );
        }
    }

}

    public function approverentpropertyAction()
    {
         //approve the rent property
        $propertyID = $this->dispatcher->getParam('propertyID');

         $rt = RentsListinings::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );
   
            $this->view->rt = $rt;  

             $rentrd = Rents::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );

            if ($this->request->getPost('street')) {
            if ($this->request->getPost('town')) {
                
            $rentrd->setStreet($this->request->getPost('street'));
            $rentrd->setTown($this->request->getPost('town'));
            $rentrd->setPostcode($this->request->getPost('postcode'));
            $rentrd->setBedroom($this->request->getPost('bedroom'));
            $rentrd->setCounty($this->request->getPost('county'));
            $rentrd->setDescription($this->request->getPost('description'));
            $rentrd->setEnabled(1);
            

            $rt->setEnabled(1);
            $rt->save();

          
            $rentrd->save();
            $this->flashSession->success(
                    $rentrd->getStreet() . ' has been successfully approved and now is live on system.'
                );

            return $this->response->redirect(
                    '/dashboard/enableProperty/'
                );
        }
    }
    }

        public function finalapprovepropertyAction()
        {

        }

        public function allemployeesAction()
        {
            $sap = new \SAP();
        
        $this->view->employees = $sap->getAllEmployees();
        }
		
 

    public function valuationAction()
    {
        $propertyID = $this->dispatcher->getParam('propertyID');

            $valuatonproperties = Valuation::find();
            $this->view->valuationproperties = $valuatonproperties;

            $request = $this->request;
                if ($request->isPost()) {
            
            //get the property ID and save the price in properties table
            $valprice = Properties::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );

            $valprice->setPrice($this->request->getPost('price'));
            $valprice->setEnabled(1);
            $valprice->save();

            //Also enable the property in Valuation table
               //get the property ID and save the price in properties table
            $valpriceenable = Valuation::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );
            $valpriceenable->setEnabled(1);
            $valpriceenable->save();


            $this->flashSession->success(
                    'Property ref:'.$valprice->getPropertyID() . ' price has been added.'
                );


        }



    }
 		
}


?>
