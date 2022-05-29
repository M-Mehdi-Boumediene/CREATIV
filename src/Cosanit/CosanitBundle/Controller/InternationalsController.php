<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Cosanit\CosanitBundle\Entity\Activations;
use Cosanit\CosanitBundle\Entity\Messagerie;
use Cosanit\CosanitBundle\Form\ActivationsType;
use Cosanit\CosanitBundle\Entity\Categories;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class InternationalsController extends Controller
{
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Aproposblock')->findAll();
        $produits = $em->getRepository('CosanitBundle:Produits')->findAll();
        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusive();
        $categories = $em->getRepository('CosanitBundle:Categories')->findInter();
        $parents = $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $ville = $form->get('categories')->getData('nom');


            $transaction = $form->get('transaction')->getData();
            if ($transaction == null) {
                $transaction = empty($transaction);
            }

            if ($transaction == 'Location') {
                $trans = 'Louer: ';
                $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $form->handleRequest($request);
                $duree = $form->get('duree')->getData();
                if ($duree == null) {
                    $duree = empty($duree);

                }
            }

            if ($transaction == 'Vente') {
                $trans = 'Acheter: ';
                $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
                $form->handleRequest($request);
                if (empty($duree)) {
                    $duree = 'all';
                }
            }

            if (empty($ville)) {
                $ville = 'all';
            }
            if (empty($duree)) {
                $duree = 'all';
            }
            if (empty($types)) {
                $types = 'Array';
            }
            return $this->redirectToRoute('cosanit_search',

                array(
                    'duree' => $duree,
                    'transaction' => $transaction,
                    'ville' => $ville,
                    'types' => $types
                ));


        }
        $trans = 'Acheter: ';
        return $this->render('CosanitBundle:Default:internationals.html.twig', array(
            'form' => $form->createView(),
            'types' => $types,
            'banners' => $banners,
            'apropos' => $apropos,
            'neufs' => $neufs,
            'produits' => $produits,
            'exclusives' => $exclusive,
            'categories' => $categories,
            'parents' => $parents,
            'logos' => $logos,
            'trans' => $trans,

        ));
    }
        public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CosanitBundle:Produits')->ByVillesInter($id);
        $ville = $em->getRepository('CosanitBundle:Categories')->findBySlug($id);
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findById(1);
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusiveInter($id);

        $form = $this->createForm('Cosanit\CosanitBundle\Form\InternationalbanType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $ville = $form->get('categories')->getData('nom');



            $transaction = $form->get('transaction')->getData();
            if($transaction == null){
                $transaction = empty($transaction);
            }

            $duree = $form->get('duree')->getData();
            if($duree == null){
                $duree = empty($duree);

            }

            $type = $form->get('quoi')->getData('nom');


            if(empty($ville)){
                $ville = 'all';
            }
            if(empty($duree)){
                $duree = 'all';
            }
            if(empty($type)){
                $type = 'Array';
            }
            $exclusiv='all';

            return $this->redirectToRoute('cosanit_search',

                array(


                    'ville'=>$ville,
                    'transaction'=>$transaction,
                    'duree'=>$duree,
                    'types'=>$type,
                    'exclusiv'=>$exclusiv
                ));



        }
        $trans = 'Acheter: ';
        return $this->render('CosanitBundle:Default:intershow.html.twig', array(
            'form' => $form->createView(),
            'banners' => $banners,
            'produits' =>$produits,
            'villes' =>$ville,
            'exclusives' =>$exclusive,
            'id'=>$id,

            'trans' =>$trans,

        ));
    }






}
