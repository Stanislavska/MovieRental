<?php

namespace Natali\ShrimpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function mainAction()
    {
        return $this->render('ShrimpsBundle:Default:main.html.twig', array());
    }

}

?>