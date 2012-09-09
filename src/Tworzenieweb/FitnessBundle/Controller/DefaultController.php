<?php

namespace Tworzenieweb\FitnessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tworzenieweb\FitnessBundle\Entity\Article;

class DefaultController extends Controller
{
    /**
     * @route("/", name="_welcome")
     * @template
     */
    public function indexAction()
    {
        
        $repository = $this->getDoctrine()->getRepository('Tworzenieweb\FitnessBundle\Entity\Page');
        
        return array(
            'page' => $repository->findOneBy(array(
            'slug' => 'homepage'))
                );
        
    }
    
    /**
     * @route("/galeria", name="galeria") 
     * @template
     */
    public function galeriaAction(Request $request)
    {
        
    }
    
    /**
     * @route("/contact", name="contact") 
     * @template
     */
    public function contactAction(Request $request)
    {
        $form = $this->createFormBuilder()
             ->add('name', 'text', array('attr' => array('placeholder' => 'Nazwa nadawcy'), 'label' => 'Nadawca'))
             ->add('email', 'email', array('attr' => array('placeholder' => 'twojemail@domena.pl'), 'label' => 'Email'))
             ->add('topic', 'text', array('attr' => array('placeholder' => 'Temat wiadomości'), 'label' => 'Temat'))
             ->add('message', 'textarea', array('attr' => array('rows' => '6', 'placeholder' => 'Treść wiadomości'), 'label' => 'Wiadomość'))
             ->getForm();
        
        if($request->getMethod() == 'POST')
        {
            $form->bindRequest($request);
            
            if($form->isValid())
            {
                $values = $form->getData();
                
                /* @var $message Swift_Mime_Message */
                $message = \Swift_Message::newInstance()
                    ->setSubject($values['topic'])
                    ->setFrom(array($values['email'] => $values['name']))
                    ->setReplyTo(array($values['email'] => $values['name']))
                    ->setTo('tworzenieweb@gmail.com')
                    ->setContentType("text/html")
                    ->setBody($this->renderView('TworzeniewebFitnessBundle:Default:mail.html.twig', $values));
                
                $this->get('mailer')->send($message);                
                $this->get('session')->setFlash('alert-box success',"Twoja wiadomość została wysłana");
                
                return $this->redirect($this->generateUrl('contact'));
                
            }
        }
        
        return array('form' => $form->createView());
    }
    
    /**
     * @route("/page/{page}", name="pages")
     * @template
     */
    public function pageAction($page)
    {
        
        $repository = $this->getDoctrine()->getRepository('Tworzenieweb\FitnessBundle\Entity\Page');
        
        return array(
            'page' => $repository->findOneBy(array(
            'slug' => $page))
                );
        
        
    }
    
    /**
     * @route("/news/{page}", name="news", defaults={"page" = 1}, options={"expose"=true}, requirements={"page" = "\d+"})
     * @template
     */
    public function newsAction($page)
    {
        
        $repository = $this->getDoctrine()->getRepository('TworzeniewebFitnessBundle:News');
        
        $serializer = $this->get('serializer'); 
        $response = new Response( $serializer->serialize($repository->findAllOrderedByDate(), 'json')); 
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
                
        
        
    }
    
    /**
     * @route("/news/{slug}", name="news_show", options={"expose"=true})
     * @template
     */
    public function showAction($slug)
    {
        
        $repository = $this->getDoctrine()->getRepository('TworzeniewebFitnessBundle:News');
        
        return array(
            'page' => $repository->findOneBy(array(
            'slug' => $slug))
                );
                
        
        
    }
}
