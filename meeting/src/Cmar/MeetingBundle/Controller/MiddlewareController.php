<?php
namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MiddlewareController extends Controller
{
    /**
     * @Route("/middleware")
     */
    public function indexAction()
    {
        
        ini_set("soap.wsdl_cache_enabled", 1);
        ini_set('soap.wsdl_cache_ttl', 1);
        
        //FIXME change  path to wsdl
        $server = new \SoapServer(dirname(__FILE__) . '/../Resources/public/wsdl/middleware.wsdl', array('encoding' => 'UTF-8'));
        $server->setObject($this->get('cmar_meeting.middleware')); 
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=UTF-8');
        
        ob_start();
        try{
            $server->handle();
        }catch(\LogicException $e){
            $server->fault($e->getCode(), $e->getMessage());
        }
        
        $response->setContent(ob_get_clean());
        
        return $response;
    }
}
