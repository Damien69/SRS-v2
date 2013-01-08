<?php 
namespace Srs\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Srs\EventBundle\Entity\Event;
use Srs\EventBundle\Form\EventType;


/**
 * News controller.
 *
 */
class EventController extends Controller
{
    public function indexAction(){
          
        //return new Response("Index Event");
        return $this->render('SrsEventBundle:Event:index.html.twig', array('event' => 'monPremierEvent'));
    }
    
    public function menuAction(){
        
        return $this->render('SrsEventBundle:Event:menu.html.twig');
    }
    
    public function showAction(event $event){
        
        return $this->render('SrsEventBundle:Event:show.html.twig');
    }
    
    public function addAction(){
        $event = new Event();
        $event->setTitle("titreTest");
        $event->setBody("on essai");
        
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($event);
        
        $em->flush();
        
        
        
    }
    
    public function modifyAction(event $event){
        
        return $this->render('SrsEventBundle:Event:modify.html.twig');
    }
    
    public function removeAction(event $event){
        
        return $this->render('SrsEventBundle:Event:remove.html.twig');
    }
    
    
}
?>
