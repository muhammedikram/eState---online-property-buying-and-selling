<?php
use Phalcon\Mvc\View;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaData;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Flash\Session as FlashSession;
use Phalcon\Events\Manager as EventsManager;

//display the erros
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

  require '../vendor/autoload.php';
    
    $debug = new \Phalcon\Debug();
    $debug->listen();

    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        '../app/controllers',
        '../app/models',
        '../app/plugins',
        '../app/library',
        '../app/form'

    ))->register();


//Create a DI
    $di = new \Phalcon\DI\FactoryDefault();

    //Setup the view component
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/view');
        $view->registerEngines(array(
    ".volt" => 'Phalcon\Mvc\View\Engine\Volt'
    ));
        return $view;
    });

//Setup the database service
    $di->set('db', function(){
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "",
            "dbname" => "estate"
        ));
    });
     
//set up flash instances, they will use bootstrap css
$di->set('flash', function() {
    return new \Phalcon\Flash\Session(array(
        'error' => 'alert alert-error',
        'success' => 'alert alert-success',
        'notice' => 'alert alert-info',
    ));
});

//session setup 
$di->set('session', function() {
    $session = new Phalcon\Session\Adapter\Files();
    $session->start();
    return $session;
});


$di->set('flash', function(){
    return new FlashSession(array(
        'error'   => 'alert alert-danger',
        'success' => 'alert alert-success',
        'notice'  => 'alert alert-info',
    ));
});


//set up backend security
$di->set('dispatcher', function() use ($di) {


 //Obtain the standard eventsManager from the DI
    $eventsManager = $di->getShared('eventsManager');

    //Instantiate the Security plugin
  $security = new Security($di);

    //Listen for events produced in the dispatcher using the Security plugin
 $eventsManager->attach('dispatch', $security);

    $dispatcher = new Phalcon\Mvc\Dispatcher();

    $eventsManager->attach(
            'dispatch:beforeException',
            function ($event, $dispatcher, $exception) {
                switch ($exception->getCode()) {
                    case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                    case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                        $dispatcher->forward(
                            array(
                                'controller' => 'error',
                                'action'     => 'route404'
                            )
                        );
                        return false;
                }
            }
        );

    //Bind the EventsManager to the Dispatcher
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

$di->set('elements', function(){
        return new Elements();
    });

use Phalcon\Mvc\Router;

$di->set(
    'router',
    function () {
        $router = new \Phalcon\Mvc\Router;

        $router->add('/index/propertydetails/{propertyID:[A-Za-z0-9-]+}',               'index::propertydetails');
        $router->add('/index/contact/{propertyID:[A-Za-z0-9-]+}',               'index::contact');
        $router->add('/index/email/{propertyID:[A-Za-z0-9-]+}',               'index::email');
        $router->add('/index/favurite/{propertyID:[A-Za-z0-9-]+}',                       'index::favurite');
        $router->add('/index/favurite/{propertyID:[A-Za-z0-9-]+}',                       'account::favurite');
        $router->add('/signup/clientRegister/',                                            'signup::clientRegister');
        $router->add('/products/search/{page:[0-9]+}', 'products::search');
        $router->add('/index/search/{page:[0-9]+}', 'index::search');
        $router->add('/account/editproperty/{propertyID:[A-Za-z0-9-]+}',               'account::editproperty');
        $router->add('/account/editrentproperty/{propertyID:[A-Za-z0-9-]+}',               'account::editrentproperty');
        $router->add('/index/arrangeviewings/{propertyID:[A-Za-z0-9-]+}',               'index::arrangeviewings');
        $router->add('/dashboard/approveproperty/{propertyID:[A-Za-z0-9-]+}',               'dashboard::approveproperty');
        $router->add('/dashboard/approverentproperty/{propertyID:[A-Za-z0-9-]+}',               'dashboard::approverentproperty');
        $router->add('/index/rentpropertydetails/{propertyID:[A-Za-z0-9-]+}',               'index::rentpropertydetails');

        return $router;
    }
);


//Handle the request
    $application = new \Phalcon\Mvc\Application($di);


    echo $application->handle()->getContent();