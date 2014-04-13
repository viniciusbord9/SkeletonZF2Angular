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

class IndexController extends AbstractActionController
{
	public function angularAction(){
	    return new ViewModel();
	}

    public function indexAction()
    {
    	$view = new ViewModel();
    	return $view;
    }

    public function editAction(){
    	$view = new ViewModel();
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
	    	return $view;
	    }
    }


}
