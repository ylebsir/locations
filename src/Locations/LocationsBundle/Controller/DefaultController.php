<?php

namespace Locations\LocationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $prenom)
    {
        $toto='majid';
        return $this->render('LocationsBundle:Default:index.html.twig', array('name' => $name , 
                                                                                'prenom' => $prenom, 
                                                                                         'toto'=> $toto ));
    }
}
