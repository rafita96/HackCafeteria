<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class MenuController extends Controller
{
	/**
     * @Route("/tortas", name="tortas")
     */
    public function tortasAction(Request $request)
    {
    	$tortas = array( "Jamón" => 55, 
            "Lomo" => 60, 
            "Carne" => 65,
            "Desebrada" => 65,
            "Chorizo" => 50 );

        // replace this example code with whatever you need
        return $this->render('menu/tortas.html.twig', 
            array(
                "tortas" => $tortas,
            ));
    }

    /**
     * @Route("/sanwish", name="sanwish")
     */
    public function sanwishesAction(Request $request)
    {
    	$sanwishes = array("Jamon" => 20,
            "Pollo" => 22,
            "Triple" => 25,
            "Frijoles" => 15);

        // replace this example code with whatever you need
        return $this->render('menu/tortas.html.twig', 
            array(
                "tortas" => $sanwishes,
            ));
    }
}
