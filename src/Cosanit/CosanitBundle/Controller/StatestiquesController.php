<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;



class StatestiquesController extends Controller
{
    public function indexAction()
    {
        return $this->render('statestiques/index.html.twig');

    }
    
}
