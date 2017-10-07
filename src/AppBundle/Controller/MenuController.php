<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MenuController extends Controller
{
	/**
     * @Route("/{platillo}", name="menu")
     */
    public function menuAction(Request $request, $platillo)
    {

        // replace this example code with whatever you need
        return $this->render('menu/index.html.twig', 
            array(
                "hola" => $platillo,
            ));
    }
}
