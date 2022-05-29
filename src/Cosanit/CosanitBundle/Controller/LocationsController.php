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

class LocationsController extends Controller
{
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Aproposblock')->findAll();
        $produits = $em->getRepository('CosanitBundle:Produits')->findByLocation();
        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusiveloc();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $types= $em->getRepository('CosanitBundle:Types')->findAll();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType', $categories);
        $form->handleRequest($request);

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $ville = $form->get('categories')->getData('nom');

            $duree= $form->get('duree')->getData();

            $transaction = $form->get('transaction')->getData();
            if($transaction == null){
                $transaction = empty($transaction);
            }

            if($transaction == 'Location'){
                $trans = 'Louer: ';
                $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $form->handleRequest($request);
                $questionForms2 = $form->get('duree')->getData();

                foreach ($questionForms2 as $questionForm2)
                {

                    $duree = $questionForm2;

                }


                if(empty($duree)){
                    $duree = 'all';
                }
            }

            if($transaction == 'Vente'){
                $trans = 'Acheter: ';
                $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
                $form->handleRequest($request);
                if(empty($duree)){
                    $duree = 'all';
                }
            }
            $types = $form->get('types')->getData('nom');




            if(empty($ville)){
                $ville = 'all';
            }
            if(empty($duree)){
                $duree = 'all';
            }
            if(empty($types)){
                $types = 'Array';
            }
            $exclusiv ='all';
            return $this->redirectToRoute('cosanit_search',

                array(
                    'duree'=>$duree,
                    'transaction'=>$transaction,
                    'ville'=>$ville,
                    'types'=>$types,
                     'exclusiv'=>$exclusiv
                ));



        }



        $formmobile = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
        $formmobile->handleRequest($request);

        if ($formmobile->isSubmitted() && $formmobile->isValid()) {


            $ville = $formmobile->get('categories')->getData('nom');


            $transaction = $formmobile->get('transaction')->getData();
            if($transaction == null){
                $transaction = empty($transaction);
            }

            if($transaction == 'Location'){
                $trans = 'Louer: ';
                $formmobile = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $formmobile->handleRequest($request);
                $questionForms2 = $form->get('duree')->getData();

                foreach ($questionForms2 as $questionForm2)
                {

                    $duree = $questionForm2;

                }


                if($duree == null){
                    $duree = empty($duree);

                }
            }

            if($transaction == 'Vente'){
                $trans = 'Acheter: ';
                $formmobile = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
                $formmobile->handleRequest($request);
                if(empty($duree)){
                    $duree = 'all';
                }
            }
            $questionForms = $formmobile->get('types')->getData();


            foreach ($questionForms as $questionForm)
            {

                $types = $questionForm->getNom();

            }

            $duree= $formmobile->get('duree')->getData();

            if(empty($ville)){
                $ville = 'all';
            }
            if(empty($duree)){
                $duree = 'all';
            }
            if(empty($types)){
                $types = 'Array';
            }
            $exclusiv ='all';
            return $this->redirectToRoute('cosanit_search',

                array(
                    'duree'=>$duree,
                    'transaction'=>$transaction,
                    'ville'=>$ville,
                    'types'=>$types,
                    'exclusiv'=>$exclusiv
                ));



        }
        return $this->render('CosanitBundle:Default:location.html.twig', array(
            'types' =>$types,
            'banners' => $banners,
            'apropos' => $apropos,
            'neufs' =>$neufs,
            'produits' =>$produits,
            'exclusives' =>$exclusive,
            'categories' =>$categories,
            'parents' =>$parents,
            'logos' =>$logos,
            'form' => $form->createView(),
            'formmobile' => $formmobile->createView(),
        ));
    }



}
