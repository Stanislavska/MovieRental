<?php

namespace Natalia\TadeuszBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NataliaTadeuszBundle:Default:index.html.twig', array());
    }

    public function bookAction($book)
    {
        return $this->render('NataliaTadeuszBundle:Books:b'.$book.'.html.twig', array());
    }

    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $reflection = new Reflection();
        $reflection->setTitle('Title');
        $reflection->setText('Reflection text');
        $reflection->setCreateDate(new \DateTime());
        $reflection->setText('setAuthor'); 

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();

        return $this->render('Default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
