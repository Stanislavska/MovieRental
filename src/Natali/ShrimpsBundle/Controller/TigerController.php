<?php

namespace Natali\ShrimpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TigerController extends Controller
{
    public function tigerAction()
    {
        return $this->render('ShrimpsBundle:Default:tiger.html.twig', array());
    }

}

?>