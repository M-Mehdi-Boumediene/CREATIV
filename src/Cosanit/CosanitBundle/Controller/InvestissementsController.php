<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Cosanit\CosanitBundle\Entity\Activations;
use Cosanit\CosanitBundle\Entity\Messagerie;
use Cosanit\CosanitBundle\Form\ActivationsType;
use Cosanit\CosanitBundle\Entity\Neufs;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class InvestissementsController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Aproposblock')->findAll();
        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusive();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchNeufsType');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            return $this->redirectToRoute('admin_bannieres_index');
        }
        return $this->render('CosanitBundle:Default:investissements.html.twig', array(
            'form' => $form->createView(),
            'types' =>$types,
            'banners' => $banners,
            'apropos' => $apropos,
            'neufs' =>$neufs,
            'exclusives' =>$exclusive,
            'categories' =>$categories,
            'parents' =>$parents,
            'logos' =>$logos,

        ));


    }

    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Aproposblock')->findAll();
        $neufs= $em->getRepository('CosanitBundle:Neufs')->findBySlug($id);
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusive();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();
        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchNeufsType');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            return $this->redirectToRoute('admin_bannieres_index');
        }
        return $this->render('CosanitBundle:Default:neufDetaille.html.twig', array(
            'form' => $form->createView(),
            'id' =>$id,
            'types' =>$types,
            'banners' => $banners,
            'apropos' => $apropos,
            'neufs' =>$neufs,
            'exclusives' =>$exclusive,
            'categories' =>$categories,
            'parents' =>$parents,
            'logos' =>$logos,
            'allcuisines'=>$allcuisines,
            'allportes'=>$allportes,
            'allbureaux'=>$allbureaux,

        ));


    }

}
