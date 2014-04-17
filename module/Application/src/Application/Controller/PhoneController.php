<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class PhoneController extends AbstractRestfulController
{
    public function getList() 
    {
	    $variables = array( 
	    	array('id'=> '1','name' => 'Nexus S', 'snippet' => 'Fast just got faster with Nexus S.'),
		    array('id'=> '2','name' => 'Motorola XOOM™ with Wi-Fi', 'snippet' => 'The Next, Next Generation tablet.'),
		    array('id'=> '3','name' => 'MOTOROLA XOOM™', 'snippet' => 'The Next, Next Generation tablet.')
		);

	    return new JsonModel(array(
	        'data' => $variables
	    ));
    }

    public function get($id) 
    {
	    $variables = array(
	    	array('id'=> '1','name' => 'Nexus S', 'snippet' => 'Fast just got faster with Nexus S.'),
		    array('id'=> '2','name' => 'Motorola XOOM™ with Wi-Fi', 'snippet' => 'The Next, Next Generation tablet.'),
		    array('id'=> '3','name' => 'MOTOROLA XOOM™', 'snippet' => 'The Next, Next Generation tablet.')
		);
		
		$result = array();
		foreach($variables as $key => $phone){
			if($phone['id'] == $id){
				$result = $phone;
			}
		}

	    return new JsonModel(array(
	        'data' => $result
	    ));
    }
}