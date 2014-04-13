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
//use Zend\View\Model\ViewModel;
use \ZF2Angular\View\Model\AngularModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$variables = array( 
    		'phones' => array(
    			array('name' => 'Nexus S', 'snippet' => 'Fast just got faster with Nexus S.'),
	        	array('name' => 'Motorola XOOM™ with Wi-Fi', 'snippet' => 'The Next, Next Generation tablet.'),
	        	array('name' => 'MOTOROLA XOOM™', 'snippet' => 'The Next, Next Generation tablet.')
	        )
	    );
        return new AngularModel($variables);
    }
}
