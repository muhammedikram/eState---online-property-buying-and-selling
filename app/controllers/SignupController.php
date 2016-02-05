 <?php


 class SignupController extends ControllerBase
 {

     public function indexAction(){
     
     //Deleting Data
        if ($this->request->isPost()) {
          
            $members= Members::find(
                array(
                     'id = :id:',
                     'bind' => array(
                         'id' => $this->request->getPost('id')
               
                    )
            ));
            
            $members->delete();
        }


        //Retrieving Data
         $this->view->members = Members::find();
      
    }
 
     
     public function clientRegisterAction()    {
        $request = $this->request;
        if ($request->isPost()) {

        $user = new MemberRegister();

        $user ->setName($this->request->getPost('name'));
        $user -> setEmail($this->request->getPost('email'));
        $user -> setpassword($this->request->getPost('password'));
        $user -> setconfirm_password($this->request->getPost('confirm_password'));

        //before saving user, check if the email already exists in system
         $existinguser = \MemberRegister::findfirst(
                array(
                    'email = :email:',
                    'bind' => array(
                        'email' => ($this->request->getPost('email'))
                        )
                    )
                );
            if($existinguser)
            {
                $this->flashSession->error($user->email=("This email &nbsp".$this->request->getPost('email')). " "." is already been taken by another user");
            }else{
              //save the user
                $user->save();

                //output success message 
                 $this->flash->success("Thanks for registering!");

                 //take new user to the login page.
                return $this->response->redirect("/signup");
        }
      }
    }


 private function _registerSession($user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->name
        ));
    }

    /**
     * This actions receive the input from the login form
     *
     */
    public function startAction()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getPost('name');

            $password = $this->request->getPost('password');
            $password = $password;

           $name = $this->request->getPost('name');
            $user = MemberRegister::findFirst("name='$name' AND password='$password' ");
  
            if ($user != false) {
                $this->_registerSession($user);
              //  $this->flash->success('Welcome ' . $user->name);
            

                return $this->forward('account');
       
            }else{

            $this->flash->error('Please enter correct login details');
        }

           //return $this->response->redirect("index");
            return $this->forward('index');
    }
}

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function endAction()
    {
        //Get session info
        $auth = $this->session->get('auth');

        //Query the active user
        $user = MemberRegister::findFirst($auth['id']);
        $this->session->remove('auth');
        $this->flash->success("Good Bye"." ".$auth['name']);
        return $this->response->redirect("index");
    }





    
  // public function registerAction()
  //  {
  //       $form = new SignUpForm();

  //       if ($this->request->isPost()) {

  //           if ($form->isValid($this->request->getPost()) != false) {

  //               $user = new Users();

  //               $user->assign(array(
  //                   'name' => $this->request->getPost('name', 'striptags'),
  //                   'email' => $this->request->getPost('email'),
  //                   'password' => $this->security->hash($this->request->getPost('password')),
  //                   'profilesId' => 2
  //               ));

  //               if ($user->save()) {
  //                   return $this->dispatcher->forward(array(
  //                       'controller' => 'index',
  //                       'action' => 'index'
  //                   ));
  //               }

  //               $this->flash->error($user->getMessages());
  //           }
  //       }

  //       $this->view->form = $form;
  //   }

public function customerRegisterAction()
    {
        $form = new SignUpForm();

        if ($this->request->isPost()) {

            if ($form->isValid($this->request->getPost()) != false) {

                $user = new Users();

                $user->assign(array(
                    'name' => $this->request->getPost('name', 'striptags'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->security->hash($this->request->getPost('password')),
                    'profilesId' => 2
                ));

                if ($user->save()) {
                    return $this->dispatcher->forward(array(
                        'controller' => 'index',
                        'action' => 'index'
                    ));
                }

                $this->flash->error($user->getMessages());
            }
        }

        $this->view->form = $form;
    }

    
}
