<?php

namespace Tworzenieweb\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function loginFormAction()
    {
        return $this->render('TworzeniewebUserBundle:Default:_login.html.twig', 
                array('last_username' => '',
                      'error' => '',
                      'csrf_token' => $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate'))
                    );
    }
    
}
