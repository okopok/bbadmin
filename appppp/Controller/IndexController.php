<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\System\UsersBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Index:index.html.twig', array(
                // ...
            ));


    }

    public function createAction()
    {
        $product = new Users();
        $product->setName('A Foo Bar');
        $product->setEmail('email@email.com');
        $product->setPassword('email@email.com');
        $product->setStatus(12);
        $product->setCreatedTs(new \DateTime('now'));
        $product->setUpdatedTs(new \DateTime('now'));
        $product->setDescription('Ahah');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();

        return new Response('Created product id '.$product->getId() . $this->render('AppBundle:Index:index.html.twig', array(
                // ...
            )));
    }

}
