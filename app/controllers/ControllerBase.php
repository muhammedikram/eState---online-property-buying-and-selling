<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


/**
 * The base controller which all other controllers should extend which
 * gives all controllers generic functionality.
 * @version 1
 * @author Muhammed Ikram <ikimuhammed@hotmail.com>
 */
class ControllerBase extends Controller
{

/**
 * The initialize method will control the layout of the website. 
 * login page will be displayed if the user is not logged in.
 * main page layout will be displayed if the user is logge in
 * @version 1
 */
    protected function initialize()
    {
         $controllerName = strtolower($this->dispatcher->getControllerName());
         $actionName = strtolower($this->dispatcher->getActionName());

         //get the session (userID)
         $auth = $this->session->get('auth');

         //if session is started
			if($auth) {
         
         //display login layout. the login layout is saved in /view/layout/login
             $this->view->setTemplateAfter('login');
        
            }else{
        	
            //if the session is not started, display the main layout. 
           $this->view->setTemplateAfter('main');
    }


//sweet service 
     $reviews = Rating::find(
                 array(
                    'enabled = :enabled:',
                    'limit' => 3,
                    'bind'=>array(
                    'enabled' => 1
                    )
                )
            );
         $this->view->ratings=$reviews;


}

/**
 * This method will be called, when we will direct the page across controllers. 
 * @version 1
 * @return string
 */
        protected function forward($uri) {

            return $this->response->redirect($uri);

        }


/**
 * This mehtod is the base setting for MS Excel downloading reports. 
 * @version 1
 */
    public function formatSpreadsheetSettings() {

        $settings = array();

        if($this->request->hasPost('isZero')) {
            //spreadsheet settings.
            $freeze = $this->request->getPost('freeze');
            $urls   = $this->request->getPost('urls');

            //conditional styles.
            $conditions = array(
                'numeric' => array(
                    'isZero'               => $this->request->getPost('isZero'),
                    'greaterThanOrEqual'   => $this->request->getPost('greaterThanOrEqual'),
                    'lessThan'             => $this->request->getPost('lessThan'),
                    'lessThanOrEqual'      => $this->request->getPost('lessThanOrEqual'),
                    'greaterThan'          => $this->request->getPost('greaterThan')
                ),
                'text' => array(
                    'contains'             => $this->request->getPost('contains'),
                    'notContains'          => $this->request->getPost('notContains'),
                    'beginsWith'           => $this->request->getPost('beginsWith'),
                    'endsWith'             => $this->request->getPost('endsWith')
                )
            );

            //output style.
            $output = $this->request->getPost('outputType');

            if(isset($freeze)) {
                $settings['freeze'] = $freeze;
            }
            $settings['urls'] = isset($urls);

            $settings['conditions'] = array();
            $settings['header'] = array('border' => array(
                'bottom' => false,
                'top' => false,
                'left' => false,
                'right' => false,
            ), 
            'style' => array(
                'bold' => true,
                'underline' => true,
                'italic' => true
            ));

            //get the header styles.
            //borders.
            if($this->request->hasPost('heading')) {
                $border = $this->request->getPost('heading');
                if(array_key_exists('borders', $border)) {
                    $border = $border['borders'];
                    $settings['header']['border']['bottom'] = array_key_exists('bottom', $border);
                    $settings['header']['border']['top'] = array_key_exists('top', $border);
                    $settings['header']['border']['left'] = array_key_exists('left', $border);
                    $settings['header']['border']['right'] = array_key_exists('right', $border);
                }
            }

            //text styles.
            if($this->request->hasPost('heading')) {
                $styles = $this->request->getPost('heading');
                if(array_key_exists('style', $styles)) {
                    $styles = $styles['style'];
                    $settings['header']['style']['bold'] = array_key_exists('bold', $styles);
                    $settings['header']['style']['underline'] = array_key_exists('underline', $styles);
                    $settings['header']['style']['italic'] = array_key_exists('italic', $styles);
                }
            }

            foreach($conditions as $type => $conds) {
                if(!array_key_exists($type, $settings['conditions'])) {
                    $settings['conditions'][$type] = array();
                }
                foreach($conds as $name => $config) {
                    $settings['conditions'][$type][$name] = array(
                        'style' => array(
                            'font' => array(
                                'color' => array(
                                    'rgb' => $config['style']['font']['color']
                                ),
                                'bold' => array_key_exists('bold', $config['style']['font'])
                            ),
                            'fill' => array(
                                'color' => array(
                                    'argb' => 'FFFFFF' //White, which will get rendered as transparant.
                                )
                            )
                        ),
                        'enabled' => array_key_exists('enabled', $config)
                    );
                    if(array_key_exists('condition', $config)) {
                        $settings['conditions'][$type][$name]['value'] = $config['condition']['value'];
                    }
                    //check that the value is valid.
                    if(in_array($type, array('greaterThanOrEqual', 'lessThan'))
                        && !is_numeric($config['condition']['value'])) {
                        //if the type is not numeric
                        $settings['conditions'][$type][$name]['enabled'] = false;
                    }

                    if(in_array($type, array('contains', 'notContains')) && strlen($config['condition']['value']) == 0) {
                        //if the input string is of length zero.
                        $settings['conditions'][$type][$name]['enabled'] = false;
                    }
                }
            }

            $settings['outputType'] = $output;

            $options = array('freeze' => array('head' => false, 'left' => false));

            if(array_key_exists('freeze', $settings) && is_array($settings['freeze'])) {
                $options['freeze']['head'] = in_array('head', $settings['freeze']);
                $options['freeze']['left'] = in_array('left', $settings['freeze']);
            }

            $options['urls'] = $settings['urls'];

            $options['conditions'] = $settings['conditions'];

            $heading = array('borders' => array());

            foreach($settings['header']['border'] as $key => $value) {
                $heading['borders'][$key] = ($value) 
                    ? array(
                        'style' => \PHPExcel_Style_Border::BORDER_THIN,
                        'color' => array(
                            'rgb' => '000'
                        )
                    )
                    : array(
                        'style' => \PHPExcel_Style_Border::BORDER_NONE,
                        'color' => array(
                            'rgb' => 'FFF'
                        )
                    );
            }

            foreach($settings['header']['style'] as $key => $value) {
                $heading[$key] = $value;
            }

            return array('outputType' => $output, 'options' => $options, 'heading' => $heading);
        }

        $settings['outputType'] = $this->request->getPost('outputType');

        return $settings;
  } 
   
}
