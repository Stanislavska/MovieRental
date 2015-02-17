<?php

namespace Natalia\TadeuszBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Natalia\TadeuszBundle\Entity\Reflection;
use Natalia\TadeuszBundle\Form\ReflectionType;

class ReflectionsController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("NataliaTadeuszBundle:Reflection");


        $reflections = $repository->findAll();
        return $this->render('NataliaTadeuszBundle:Reflections:index.html.twig', array('reflections' => $reflections));
    }

    public function addAction(Request $request)
    {
        $reflection = new Reflection();
        $form = $this->createForm(new ReflectionType(), $reflection);

        if($request->isMethod('POST')
            && $form->handleRequest($request)
            && $form->isValid()
            ){

                $em = $this->getDoctrine()->getManager();
                $em->persist($reflection);
                $em->flush();
                return $this->redirect($this->generateUrl('natalia_tadeusz_reflections_index'), array());
        }

        return $this->render('NataliaTadeuszBundle:Reflections:add.html.twig', array('form' => $form->createView()));
    }

    public function showAction(Request $request)
    {
        
    }
}
