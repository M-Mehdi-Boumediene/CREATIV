<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Parents;
use Cosanit\CosanitBundle\Form\ParentsType;

/**
 * Recrutement controller.
 *
 */
class RecrutementController extends Controller
{

    public function indexAction(Request $request)
    {

        return $this->render('CosanitBundle:Default:recrutement.html.twig');
    }


}
