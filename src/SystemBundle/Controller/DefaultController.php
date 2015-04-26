<?php

namespace SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SystemBundle:Default:index.html.twig');
    }

    public function nameAction($name)
    {
        return $this->render('SystemBundle:Default:hello.html.twig', array('name' => $name));
    }
}
