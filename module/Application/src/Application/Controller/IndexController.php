<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use \ZF2Angular\View\Model\AngularModel;

class IndexController extends AbstractActionController
{

	public function angularAction(){
		$variables = array( 
    		'phones' => array(
    			array('id'=> '1','name' => 'Nexus S', 'snippet' => 'Fast just got faster with Nexus S.'),
	        	array('id'=> '2','name' => 'Motorola XOOM™ with Wi-Fi', 'snippet' => 'The Next, Next Generation tablet.'),
	        	array('id'=> '3','name' => 'MOTOROLA XOOM™', 'snippet' => 'The Next, Next Generation tablet.')
	        )
	    );
	    $angular_model = new AngularModel($variables);
	    $this->layout()->addChild($angular_model, 'controllers');
	}

    public function indexAction()
    {
    	$view = new ViewModel();
    	$this->layout()->setTemplate('layout/empty');
    	return $view;
    }

    public function editAction(){
    	$view = new ViewModel();
    	$this->layout()->setTemplate('layout/empty');
    	return $view;
    }

    public function phonesAction(){
    	$id = $this->params()->fromRoute('id',0);
    	if($id == 0){
	    	$variables = array( 
	    		'phones' => array(
	    			array('id'=> '1','name' => 'Nexus S', 'snippet' => 'Fast just got faster with Nexus S.'),
		        	array('id'=> '2','name' => 'Motorola XOOM™ with Wi-Fi', 'snippet' => 'The Next, Next Generation tablet.'),
		        	array('id'=> '3','name' => 'MOTOROLA XOOM™', 'snippet' => 'The Next, Next Generation tablet.')
		        )
		    );
	    	$view = new ViewModel($variables);
	    	$this->layout()->setTemplate('layout/empty');
	    	return $view;
	    }else{
	    	$variables = array( 
	    		'phones' => array(
	    			array('id'=> '1','name' => 'Nexus S', 'snippet' => 'Fast just got faster with Nexus S.'),
		        	array('id'=> '2','name' => 'Motorola XOOM™ with Wi-Fi', 'snippet' => 'The Next, Next Generation tablet.'),
		        	array('id'=> '3','name' => 'MOTOROLA XOOM™', 'snippet' => 'The Next, Next Generation tablet.')
		        )
		    );
		    $result = array();
		    foreach($variables['phones'] as $key => $phone){
		    	if($phone['id'] == $id){
		    		$result = array('phones' => $phone );
		    	}
		    }
	    	$view = new ViewModel($result);
	    	$this->layout()->setTemplate('layout/empty');
	    	return $view;
	    }
    }


}
