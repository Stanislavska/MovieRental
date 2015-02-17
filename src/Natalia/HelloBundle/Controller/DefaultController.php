<?php

namespace Natalia\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstname, $lastname)
    {
        return $this->render('NataliaHelloBundle:Default:index.html.twig', array('firstname' => $firstname, 'lastname' => $lastname));
    }
}
