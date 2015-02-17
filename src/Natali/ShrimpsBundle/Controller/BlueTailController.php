<?php

namespace Natali\ShrimpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlueTailController extends Controller
{
    public function blueTailAction()
    {
        return $this->render('ShrimpsBundle:Default:blue_tail.html.twig', array());
    }
}

?>