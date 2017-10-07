<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('menu/index.html.twig', 
            array(
                "hola" => "Gaby",
            ));
    }

    /**
     * @Route("/hello", name="perro")
     */
    public function gatoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('menu/index.html.twig', 
            array(
                "hola" => "Anairene",
            ));
    }
}