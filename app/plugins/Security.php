<?php

use Phalcon\Events\Event,
    Phalcon\Mvc\User\Plugin,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Acl;

/**
 * Security
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class Security extends Plugin
{

    public function __construct($dependencyInjector)
    {
        $this->_dependencyInjector = $dependencyInjector;
    }

    public function getAcl()
    {

            $acl = new Phalcon\Acl\Adapter\Database(
                array(
                    'db' => $this->_dependencyInjector->get('db'),
                    'roles' => 'roles',
                    'rolesInherits' => 'roles_inherits',
                    'resources' => 'resources',
                    'resourcesAccesses' => 'resources_accesses',
                    'accessList' => 'access_list'
 )
            

            );
            



$acl->setDefaultAction(Phalcon\Acl::DENY);    

            return $acl;
    }
        

    /**
     * This action is executed before execute any action in the application
     *
     * @param Event $event
     * @param Dispatcher $dispatcher
     */
    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
    {
        $acl = $this->getAcl();

        $auth = $this->session->get('auth');
        if (!$auth){
            $role = 'Guests';
        } else {
            $role = 'Users';
        }

       // die(var_dump($role));

        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        if($acl->isResource($controller)) {

            $allowed = $acl->isAllowed($role, $controller, $action);
            if ($allowed != Acl::ALLOW) {
                $this->flash->error("Enter your login details");
                $dispatcher->forward(
                    array(
                        'controller' => 'signup',
                        'action' => 'index'
                    )
                );
                return false;
            } 

        }

        

    }

}
