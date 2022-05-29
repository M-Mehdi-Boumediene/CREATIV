<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Cosanit\CosanitBundle\Entity\Activations;
use Cosanit\CosanitBundle\Entity\Messagerie;
use Cosanit\CosanitBundle\Form\ActivationsType;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class AutomobileController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $types= $em->getRepository('CosanitBundle:Types')->findAll();

        return $this->render('CosanitBundle:Default:automobile.html.twig', array(

            'categories' =>$categories,
            'types' =>$types,

        ));
    }



}
