<?php

/**
 * The Account controller will handle all the work regarding user account
 * @version 1
 * @author Muhammed Ikram <ikimuhammed@hotmail.com>
 */
class AccountController extends ControllerBase

{
    public function indexAction()
    {
        
        $auth = $this->session->get('auth');
        $user = MemberRegister::find($auth['id']);

        $name = $auth['name'];
        $this->view->displayName = $name;


        $propertyID = $this->dispatcher->getParam("propertyID");

    }
    
    Public function ChangeDetailsAction()
    {
        //Get session info
        $auth = $this->session->get('auth');

        //Query the active user
        $user = MemberRegister::findFirst($auth['id']);

        $this->view->users=$user;

        if ($user == false) {
            return $this->_forward('index/index');
        }

        if (!$this->request->isPost()) {
            $this->tag->setDefault('name', $user->name);
            $this->tag->setDefault('email', $user->email);
        } else {

            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            //$cpassword = $this->request->getPost('confirm_password');



            $user->name = $name;
            $user->email = $email;
            $user->password=$password;
            $user -> setconfirm_password($this->request->getPost('confirm_password'));
            $user->save();
           $this->flash->success(
            "Your profile is been updated successfully");
        }


    }

    public function viewfavuritesaction()
    {
        /* This function will out put the user favurite. 
        * I will need to get user ID because when it will get properties from favurite table
        * it will find bu logged in user id
        */

        //get active session
           $auth = $this->session->get('auth');
           
        //get the active user. properties will be display based on his ID
           $user = $auth['id'];

        //this for favurite properties

        //get the properteis saved by this user and display them
            $getfavurites = Favurites::find(
                array(
                    'id = :id:',
                    'group'=>array('propertyID'),//grouping so rows do not repeat. 
                    'bind'=>array(//binding id with id 
                    'id' => $user = $auth['id'])
                    )
                );

            $this->view->myfavurites = $getfavurites;

        //delete property from favurites
         //Deleting Data
        if ($this->request->isPost()) {

        $new = $this->request->getPost('propertyID');
    
          $fav= Favurites::find(
             array(
                    'propertyID = :propertyID:',
                     'bind' => array(
                         'propertyID' => $new
               )
            ));
            $fav->delete();

         return $this->forward('account/viewfavurites');
        }   

    }


        /* This function add's properties to system
        *  Information will be passed through form
        * get the information and store it.
        */
    public function addPropertyAction()
   
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
            $kitchen = $request->getPost('kitchen');
            $reception = $request->getPost('reception');
            $bathroom = $request->getPost('bathroom');
            $parking= $request->getPost('parking');
            $space=$request->getPost('space');
            $valuation = $request->getPost('valuation');

             // var_dump($_FILES);
           // Check if the user has uploaded files
        if ($this->request->hasFiles() == true) {
            $baseLocation = '/estate/public/images/';

            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {
               
            $file->moveTo($baseLocation . $file->getName());
        
            $user = new Properties();

            $user->propertyID = $pPropertyID;
            $user->purpose = $pPurpose;
            $user->street = $pStreet;
            $user->town = $pTown;
            $user->postcode = $pPostcode;
            $user->type = $pType;
            $user->bedroom = $pBedrooms;
            $user->description = $pDescription;
            $user->validUntil = $pValidUntil;
            $user->enabled= 0;
            $user->kitchen =$kitchen;
            $user->price=$pPrice;
            $user->reception=$reception;
            $user->bathroom=$bathroom;
            $user->parking=$parking;
            $user->space=$space;
            $user->image1 = $file->getName();
            // $user->image1 = $file->getName();
            // $user->image1 = $file->getName();

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


            if($exitProperty)
            {
                $this->flashSession->error($user->street=$pStreet. " "."already exists in system");
            }else{


            //save property
             $user->save();
               $this->flash->success($user->street=$pStreet. " "."has been successfully saved");


             //add entry to listining table

            $listining = new Listinings();
            $listining->propertyID = $pPropertyID;
            $listining->userID = $loggedInUser;
            $listining->enabled = 0;
            $listining->save();
            }

        //add entry in rent table
            // if($pPurpose == "rent")
            // {
            // $listining = new RentsListinings();
            // $listining->propertyID = $pPropertyID;
            // $listining->userID = $loggedInUser;
            // $listining->enabled = 0;
            // $listining->save();
            // }
            

            //if customer require valuation, Add entry in valuation tabele

            if($valuation=="Yes") {
                $val = new Valuation();
                $val->propertyID=$pPropertyID;
                $val->userID=$loggedInUser;
                $val->enabled=0;
                $val->street=$pStreet;
                $val->town=$pTown;
                $val->postcode=$pPostcode;
                $val->date->date;
                $val->save();
            }
                
            return $this->forward("account/addproperty");
            
                }
            }
          }   

    }

        /* This function shows users properties on their dashboard
        * 
        * 
        */



        public function roomforrentAction()
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
            $parking= $request->getPost('parking');
            $space=$request->getPost('space');
            $ready=$request->getPost('ready');
            $roomavailable=$request->getPost('roomavailable');
            $roomsize=$request->getPost('roomsize');
            $deposit=$request->getPost('deposit');
            $petsallowed=$request->getPost('petsallowed');
            $minimumcontract=$request->getPost('minimumcontract');
            $smoaking=$request->getPost('smoaking');
            $couple=$request->getPost('couple');

            //  die(var_dump($roomsize));

             // var_dump($_FILES);
           // Check if the user has uploaded files
        if ($this->request->hasFiles() == true) {
            $baseLocation = '/estate/public/images/';

            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {
               
            $file->moveTo($baseLocation . $file->getName());
        
            $user = new Rooms();

            $user->propertyID = $pPropertyID;
            $user->purpose = $pPurpose;
            $user->street = $pStreet;
            $user->town = $pTown;
            $user->postcode = $pPostcode;
            $user->type = $pType;
            $user->bedroom = $pBedrooms;
            $user->description = $pDescription;
            $user->validUntil = $pValidUntil;
            $user->enabled= 0;
            $user->price=$pPrice;
            $user->parking=$parking;
            $user->space=$space;
            $user->userID=$loggedInUser;
            $user->ready=$ready;
            $user->roomavailable=$roomavailable;
            $user->roomsize=$roomsize;
            $user->deposit=$deposit;
            $user->petsallowed=$petsallowed;
            $user->minimumcontract=$minimumcontract;
            $user->smoaking=$smoaking;
            $user->couple=$couple;
            $user->image1 = $file->getName();
            // $user->image1 = $file->getName();
            // $user->image1 = $file->getName();

            $file->moveTo($baseLocation . $file->getName());
           
            //Before Save, Check if this property already exists in the system
             $exitProperty = Rooms::findfirst(
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
                     $this->flashSession->success($user->street=$pStreet. " "."has been saved successfully and now will be approved by admin.");

            
        }
    }
}
}


}

    public function showlistingsAction() {

        //get the active user
        $auth = $this->session->get('auth');
     
        //get the active user ID, for to save in database
        $activeUser = $auth['id'];

        //get information from listinings table
        $myListinings = Listinings:: find(
           array(
           'userID = :userID:',
           'bind' => array(
            'userID' => $activeUser
            )
        ) 
    );

    //     //get information from RentsListinings table.
    //       $myRentsListinings = RentsListinings:: find(
    //        array(
    //        'userID = :userID:',
    //        'bind' => array(
    //         'userID' => $activeUser
    //         )
    //     ) 
    // );
        $this->view->mySaleProperties = $myListinings;
       // $this->view->myRentProperties = $myRentsListinings;

        // $viewviewings = Viewings::find(
        //     array(
        //     'propertyID= :propertyID:',
        //     'bind' => array(
        //         'propertyID' => $propertyID 
        //         )
        //     )
        // );
                
        //         $this->view->viewings = $viewviewings;

    }



        /* This function allows users to delete properties from their account 
        * 
        * 
        */

    public function deletePropertyAction() {

           if ($this->request->isPost()) {

        $new = $this->request->getPost('propertyID');
    
          $fav= Listinings::find(
             array(
                    'propertyID = :propertyID:',
                     'bind' => array(
                         'propertyID' => $new
               )
            ));
            $fav->delete();

            $fav= Properties::find(
             array(
                    'propertyID = :propertyID:',
                     'bind' => array(
                         'propertyID' => $new
               )
            ));
            $fav->delete();

            $fav= Rents::find(
             array(
                    'propertyID = :propertyID:',
                     'bind' => array(
                         'propertyID' => $new
               )
            ));
            $fav->delete();

            $fav= RentsListinings::find(
             array(
                    'propertyID = :propertyID:',
                     'bind' => array(
                         'propertyID' => $new
               )
            ));
            $fav->delete();

         return $this->forward('/account/showlistings');
        }  
    }


        /* This function allows users to edit the details of their properties. 
        * 
        * 
        */
    public function editpropertyAction() {

        //get the property ID, selected by by the user to delete
       $propertyID = $this->dispatcher->getParam('propertyID');

       $ud = Properties::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );
       if (!$ud) {
            //error 404 page not found
        }

        if ($this->request->getPost('street')) {
            if ($this->request->getPost('town')) {
                
            $ud->setStreet($this->request->getPost('street'));
            $ud->setTown($this->request->getPost('town'));
            $ud->setPostcode($this->request->getPost('postcode'));
            $ud->setBedroom($this->request->getPost('bedroom'));
            $ud->setType($this->request->getPost('type'));
            $ud->setDescription($this->request->getPost('description'));
          
            $ud->save();
            $this->flashSession->success(
                    $ud->getStreet() . ' has been successfully updated.'
                );

            return $this->response->redirect(
                    'account/showlistings/'
                );
        }
    }
            $this->view->ud = $ud;  
    }


public function editrentpropertyAction() {

        //get the property ID, selected by by the user to delete
       $propertyID = $this->dispatcher->getParam('propertyID');

       $rd = Rents::findFirst(
            array(
                'propertyID = :propertyID:',
                'bind' => array (
                    'propertyID' => $propertyID
                    )
                )
            );
       if (!$rd) {
            //error 404 page not found
        }

        if ($this->request->getPost('street')) {
            if ($this->request->getPost('town')) {
                
            $rd->setStreet($this->request->getPost('street'));
            $rd->setTown($this->request->getPost('town'));
            $rd->setPostcode($this->request->getPost('postcode'));
            $rd->setBedroom($this->request->getPost('bedroom'));
            $rd->setCounty($this->request->getPost('county'));
            $rd->setDescription($this->request->getPost('description'));
          
            $rd->save();
            $this->flashSession->success(
                    $rd->getStreet() . ' has been successfully updated.'
                );

            return $this->response->redirect(
                    'account/showlistings/'
                );
        }
    }
            $this->view->rd = $rd;  
    }


    public function bookingrequestsAction()
    {
        //get the active user
        $auth = $this->session->get('auth');
     
        //get the active user ID, for to save in database
        $activeUser = $auth['id'];

        //get information from listinings table
        $views = Viewings:: find(
           array(
           'userID = :userID:',
           'enabled = :enabled:',
          'bind' => array(
           // 'enabled' =>1,
            'userID' => $activeUser
          
            )
        ) 
    );
        $this->view->viewings = $views;


              //if there are any requests; seller must approve viewongs requests
              if($this->request->getPost('action') == 'approve')  {
            
                //get the property add that to be approved. 
                $propertyID= $this->dispatcher->getParam("propertyID");

                 if (isset($propertyID)) {
                $approve = Viewings::findFirst(
                    array(
                            'propertyID = :propertyID:',
                            'bind'=>array(
                            'propertyID' => $this->dispatcher->getParam('propertyID')
                            )
                    )
                );

                $approve->enabled=1;
                $approve->save();

                 if ($approve) {
                     $this->flash->success('You have successfully approved this property');
                 }
            } 
        }
    }


  
}//end of class


?>