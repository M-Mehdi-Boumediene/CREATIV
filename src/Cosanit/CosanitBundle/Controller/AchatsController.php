<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Cosanit\CosanitBundle\Entity\Activations;
use Cosanit\CosanitBundle\Entity\Messagerie;
use Cosanit\CosanitBundle\Form\ActivationsType;
use Cosanit\CosanitBundle\Entity\Types;
use Cosanit\CosanitBundle\Entity\Categories;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class AchatsController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categories= $em->getRepository('CosanitBundle:Categories')->findVilles();
        $types= $em->getRepository('CosanitBundle:Types')->findAll();
        $trans = 'Acheter: ';

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
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

        return $this->render('CosanitBundle:Default:achats.html.twig', array(
            'categories' =>$categories,
            'types' =>$types,
            'form' => $form->createView(),
            'formmobile' => $formmobile->createView(),
            'trans' =>$trans,

        ));
    }

    public function achatsbyvilesAction(Request $request, $ville)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CosanitBundle:Produits')->ByVilles($ville);
        $exclusive = $em->getRepository('CosanitBundle:Produits')->ByVillesExclusive($ville);
        $ville = $em->getRepository('CosanitBundle:Categories')->findBySlug($ville);

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
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
            $types = $form->get('types')->getData();




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

        $trans = 'Acheter: ';


        $formmobile = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
        $formmobile->handleRequest($request);

        if ($formmobile->isSubmitted() && $formmobile->isValid()) {


            $ville = $formmobile->get('categories')->getData('nom');

            $duree= $formmobile->get('duree')->getData();

            $transaction = $formmobile->get('transaction')->getData();
            if($transaction == null){
                $transaction = empty($transaction);
            }

            if($transaction == 'Location'){
                $trans = 'Louer: ';
                $formmobile = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $formmobile->handleRequest($request);
                $questionForms2 = $formmobile->get('duree')->getData();

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
                $formmobile = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
                $formmobile->handleRequest($request);
                if(empty($duree)){
                    $duree = 'all';
                }
            }
            $types = $formmobile->get('types')->getData();




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

        return $this->render('CosanitBundle:Default:immobyvilles.html.twig', array(
            'produits' =>$produits,
            'exclusives' =>$exclusive,
            'villes' =>$ville,
            'id'=>$id,
            'form' => $form->createView(),
            'formmobile' => $formmobile->createView(),
            'trans' =>$trans,

        ));
    }

    public function achatsbytypesAction(Request $request,  $id)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CosanitBundle:Produits')->ByTypes($id);
        $ville = $em->getRepository('CosanitBundle:Types')->findBySlug($id);

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $ville = $form->get('categories')->getData('nom');



            $transaction = $form->get('transaction')->getData();
            if($transaction == null){
                $transaction = empty($transaction);
            }

            if($transaction == 'Location'){
                $trans = 'Louer: ';
                $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $form->handleRequest($request);
                $duree = $form->get('duree')->getData();
                if($duree == null){
                    $duree = empty($duree);

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
        $trans = 'Acheter: ';


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

        return $this->render('CosanitBundle:Default:immobytypes.html.twig', array(
            'produits' =>$produits,
            'villes' =>$ville,
            'id'=>$id,
            'form' => $form->createView(),
            'formmobile' => $formmobile->createView(),
            'trans' =>$trans,

        ));
    }

}
