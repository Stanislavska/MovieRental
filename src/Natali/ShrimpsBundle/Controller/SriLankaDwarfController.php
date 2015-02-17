<?php

namespace Natali\ShrimpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SriLankaDwarfController extends Controller
{
    public function sriLankaDwarfAction()
    {
        return $this->render('ShrimpsBundle:Default:sri_lanka_dwarf.html.twig', array());
    }
}

?>