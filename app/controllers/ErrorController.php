<?php

/**
 * Controller used to handle routing errors.
 * @version 1
 * @author muhammed ikram <ikimuhammed@hotmail.com>
 */
class ErrorController extends ControllerBase 
{
    /**
     * Disables the view for all actions in this controller.
     */
    public function initialize() {
        parent::initialize();
      
    }
    /**
     * Handles any 404 'Not Found' errors.
     */
    public function route404Action()
    {
        $this->response->setStatusCode(404, 'Not Found');
        echo '404 Error' . PHP_EOL;
        return;
    }

}

