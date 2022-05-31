<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Cosanit\CosanitBundle\Entity\Activations;
use Cosanit\CosanitBundle\Entity\Messagerie;
use Cosanit\CosanitBundle\Form\ActivationsType;
use Cosanit\CosanitBundle\Entity\Produits;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Doctrine\Common\Collections\ArrayCollection;
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Apropos')->findAll();
        $produits = $em->getRepository('CosanitBundle:Produits')->findByAll();
        $cuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisine();
        $portes = $em->getRepository('CosanitBundle:Produits')->findByPorte();
        $bureaux = $em->getRepository('CosanitBundle:Produits')->findByBureau();

        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();

        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusive();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $parents2= $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchbanType');
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
            if($transaction == 'Location'){
                $trans = 'Louer: ';
                $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $form2->handleRequest($request);
            }

            if($transaction == 'Vente'){
                $trans = 'Acheter: ';
                $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
                $form2->handleRequest($request);
                $duree = empty($duree);
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

            $exclusiv = 'all';

            return $this->redirectToRoute('cosanit_search',

                array(
                    'duree'=>$duree,
                    'transaction'=>$transaction,
                    'ville'=>$ville,
                    'types'=>$types,
                    'exclusiv'=>$exclusiv
                ));



        }
        return $this->render('CosanitBundle:Default:index.html.twig', array(

            'form' => $form->createView(),
            'types' =>$types,
            'banners' => $banners,

            'apropos' => $apropos,
            'neufs' =>$neufs,
            'produits' =>$produits,
            'cuisines'=>$cuisines,
            'allcuisines'=>$allcuisines,
            'portes'=>$portes,
            'allportes'=>$allportes,
            'bureaux'=>$bureaux,
            'allbureaux'=>$allbureaux,
            'exclusives' =>$exclusive,
            'categories' =>$categories,
            'parents' =>$parents,
            'parents2' =>$parents2,
            'logos' =>$logos,

        ));
    }

    public function devisAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Apropos')->findAll();



        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $parents2= $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchbanType');
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
            if($transaction == 'Location'){
                $trans = 'Louer: ';
                $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $form2->handleRequest($request);
            }

            if($transaction == 'Vente'){
                $trans = 'Acheter: ';
                $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
                $form2->handleRequest($request);
                $duree = empty($duree);
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

            $exclusiv = 'all';

            return $this->redirectToRoute('cosanit_search',

                array(
                    'duree'=>$duree,
                    'transaction'=>$transaction,
                    'ville'=>$ville,
                    'types'=>$types,
                    'exclusiv'=>$exclusiv
                ));



        }
        return $this->render('CosanitBundle:Default:devis.html.twig', array(

            'form' => $form->createView(),
            'types' =>$types,
            'banners' => $banners,

            'apropos' => $apropos,
            'neufs' =>$neufs,
            'categories' =>$categories,
            'parents' =>$parents,
            'parents2' =>$parents2,
            'logos' =>$logos,

        ));
    }
    public function devisidAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Apropos')->findAll();
        $produits = $em->getRepository('CosanitBundle:Produits')->findByAll();
        $cuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisine();
        $portes = $em->getRepository('CosanitBundle:Produits')->findByPorte();
        $bureaux = $em->getRepository('CosanitBundle:Produits')->findByBureau();

        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();

        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusive();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $parents2= $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchbanType');
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
            if($transaction == 'Location'){
                $trans = 'Louer: ';
                $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
                $form2->handleRequest($request);
            }

            if($transaction == 'Vente'){
                $trans = 'Acheter: ';
                $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
                $form2->handleRequest($request);
                $duree = empty($duree);
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

            $exclusiv = 'all';

            return $this->redirectToRoute('cosanit_search',

                array(
                    'duree'=>$duree,
                    'transaction'=>$transaction,
                    'ville'=>$ville,
                    'types'=>$types,
                    'exclusiv'=>$exclusiv
                ));



        }
        return $this->render('CosanitBundle:Default:calcules.html.twig', array(

            'form' => $form->createView(),
            'types' =>$types,
            'banners' => $banners,

            'apropos' => $apropos,
            'neufs' =>$neufs,
            'produits' =>$produits,
            'cuisines'=>$cuisines,
            'allcuisines'=>$allcuisines,
            'portes'=>$portes,
            'allportes'=>$allportes,
            'bureaux'=>$bureaux,
            'allbureaux'=>$allbureaux,
            'exclusives' =>$exclusive,
            'categories' =>$categories,
            'parents' =>$parents,
            'parents2' =>$parents2,
            'logos' =>$logos,

        ));
    }
    public function immobilierAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $banners = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $apropos = $em->getRepository('CosanitBundle:Aproposblock')->findAll();
        $produits = $em->getRepository('CosanitBundle:Produits')->findAlldesc();
        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();
        $exclusive = $em->getRepository('CosanitBundle:Produits')->findByExclusive();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();
        $types = $em->getRepository('CosanitBundle:Types')->findAll();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Searchban2Type');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $ville = $form->get('categories')->getData('nom');



            $transaction = $form->get('transaction')->getData();
            if($transaction == null){
                $transaction = empty($transaction);
            }
            $duree = $form->get('duree')->getData();
            if(empty($duree)){
                $duree = 'all';
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

        return $this->render('CosanitBundle:Default:immobilier.html.twig', array(
            'form' => $form->createView(),
            'types' =>$types,
            'banners' => $banners,
            'apropos' => $apropos,
            'neufs' =>$neufs,
            'produits' =>$produits,
            'exclusives' =>$exclusive,
            'categories' =>$categories,
            'parents' =>$parents,
            'logos' =>$logos,

        ));
    }
    public function aproposAction()
    {

        $em = $this->getDoctrine()->getManager();
        $about = $em->getRepository('CosanitBundle:Apropos')->findByid(1);
        return $this->render('CosanitBundle:Default:apropos.html.twig', array(
            'about' => $about,
        ));
    }

    public function alertAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $apropos = $em->getRepository('CosanitBundle:Aproposblock')->findAll();
        $about = $em->getRepository('CosanitBundle:Apropos')->findByid(1);

        $form = $this->createForm('Cosanit\CosanitBundle\Form\AlertType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {




        }

        return $this->render('CosanitBundle:Default:alert.html.twig', array(
            'form' => $form->createView(),
            'apropos' => $apropos,
            'about' => $about,

        ));
    }

    public function produitsAction()
    {

        $em = $this->getDoctrine()->getManager();
        $findproduits = $em->getRepository('CosanitBundle:Produits')->findAll();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();

        $produits  = $this->get('knp_paginator')->paginate($findproduits,$this->get('request')->query->get('page',1),2); /* query NOT result */

        return $this->render('CosanitBundle:Default:produits.html.twig', array(
            'produits' =>$produits,
            'parents' =>$parents,
        ));
    }

    public function produitsparentAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CosanitBundle:Produits')->findById($id);
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        return $this->render('CosanitBundle:Default:produits.html.twig', array(
            'produits' =>$produits,
            'parents' =>$parents,
        ));
    }
    public function produitscategorieAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CosanitBundle:Produits')->byCategorie($id);
        $categorie = $em->getRepository('CosanitBundle:Categories')->findOneBy(array('slug'=>$id));
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();
        return $this->render('CosanitBundle:Default:produits-categorie.html.twig', array(
            'produits' =>$produits,
            'allcuisines' =>$allcuisines,
            'allportes' =>$allportes,
            'allbureaux' =>$allbureaux,
            'categorie' =>$categorie,
            'categories' =>$categories,
        ));
    }
    public function partenairescategorieAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CosanitBundle:Produits')->byCategorie($id);
        $categorie = $em->getRepository('CosanitBundle:Categories')->findOneBy(array('nom'=>$id));
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $partenaires = $em->getRepository('CosanitBundle:Partenaires')->byCategorie($id);
        $types= $em->getRepository('CosanitBundle:Types')->findAll();
        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();

        return $this->render('CosanitBundle:Default:partenaires-categorie.html.twig', array(
            'produits' =>$produits,
            'types' =>$types,
            'partenaires' =>$partenaires,
            'allcuisines' =>$allcuisines,
            'allportes' =>$allportes,
            'allbureaux' =>$allbureaux,
            'categorie' =>$categorie,
            'categories' =>$categories,
        ));
    }
    public function garantieAction()
    {
        return $this->render('CosanitBundle:Default:garantie.html.twig');
    }

    public function servicesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();
        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();

        return $this->render('CosanitBundle:Default:services.html.twig', array(

            'categories' =>$categories,
            'allcuisines'=>$allcuisines,
            'allportes'=>$allportes,
            'allbureaux'=>$allbureaux,
            'neufs' =>$neufs,


        ));
    }


    public function contactAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();


        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\ContactType');
        $form->handleRequest($request);

        $nom= $form->get('nom')->getData();
        $telephone= $form->get('telephone')->getData();
        $email= $form->get('email')->getData();
        $message= $form->get('message')->getData();
        if ($form->isSubmitted() && $form->isValid() ) {

            $message = \Swift_Message::newInstance()
                ->setSubject('Message Visiteur Sadjiaceram.com')
                ->setFrom('contact@sadjiaceram.com')
                ->setBcc(['contact@creativdz.com','commercial@creativdz.com','elm3hdi@gmail.com'])
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'CosanitBundle:Mails:contact.html.twig',
                        array(
                            'nom' => $nom,
                            'telephone'=> $telephone,
                            'email'=> $email,
                            'message' => $message,
                        )
                    ),
                    'text/html'
                );



            $this->get('mailer')->send($message);




            $this->addFlash(
                'notice-mail',
                "Votre message à bien été envoyé!, Nous vous répondrons dans les plus brefs délais."
            );


            return $this->redirectToRoute('cosanit_contact');


        }
        return $this->render('CosanitBundle:Default:contact.html.twig', array(
            'categories' =>$categories,
            'allcuisines' =>$allcuisines,
            'allportes' =>$allportes,
            'allbureaux' =>$allbureaux,
            'parents' =>$parents,
            'form' => $form->createView(),


        ));
    }

    public function showAction($categorie, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $categories= $em->getRepository('CosanitBundle:Categories')->findAll();
        $produits = $em->getRepository('CosanitBundle:Produits')->findBySlug($id);
        $parents= $em->getRepository('CosanitBundle:Parents')->findAll();
        $allcuisines = $em->getRepository('CosanitBundle:Produits')->findByCuisineAll();
        $allportes = $em->getRepository('CosanitBundle:Produits')->findByPorteAll();
        $allbureaux = $em->getRepository('CosanitBundle:Produits')->findByBureauAll();
        $similaire= $em->getRepository('CosanitBundle:Produits')->findBy(array('categories'=>$produits[0]->getCategories()),array('id' => 'DESC'));
        $this->get('positibe_unique_views.views_counter')->count($produits[0]);
        return $this->render('CosanitBundle:Default:show.html.twig', array(
            'categories' =>$categories,
            'allcuisines'=>$allcuisines,
            'allportes'=>$allportes,
            'allbureaux'=>$allbureaux,
            'produits' =>$produits,
            'id' =>$id,
            'parents' =>$parents,
            'similaire' =>$similaire,

        ));
    }


    public function packsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CosanitBundle:Aproposblock')->findBy(array('id'=>1));


        return $this->render('CosanitBundle:Default:packs.html.twig', array(

            'about' => $categories,


        ));
    }

    public function entrepriseAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CosanitBundle:Entreprises')->findBy(array('id'=>1));


        return $this->render('CosanitBundle:Default:entreprise.html.twig', array(

            'about' => $categories,


        ));
    }

    public function pubsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CosanitBundle:Pubs')->findBy(array('id'=>1));


        return $this->render('CosanitBundle:Default:pubs.html.twig', array(

            'about' => $categories,


        ));
    }

    public function docsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CosanitBundle:Docs')->findBy(array('id'=>1));


        return $this->render('CosanitBundle:Default:docs.html.twig', array(

            'about' => $categories,


        ));
    }
    public function mentionsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CosanitBundle:Mentions')->findBy(array('id'=>1));


        return $this->render('CosanitBundle:Default:mentions.html.twig', array(

            'about' => $categories,


        ));
    }


    public function activationAction(Request $request)
    {
        $activation = new Activations();
        $messagerie = new Messagerie();

        $form = $this->createForm('Cosanit\CosanitBundle\Form\ActivationsType', $activation);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $code= $form->get('serial')->getData();
        $serial = $em->getRepository('CosanitBundle:Serials')->findOneBy(array('serial' => $code,'active' => 0));


        if($form->isSubmitted() && $form->isValid() && $code =! $serial){
            $this->addFlash(
                'notice-mail-error',
                "Le numéro de série n'est pas valide."
            );
        }
        if ($form->isSubmitted() && $form->isValid() && $code = $serial ) {

            $message = \Swift_Message::newInstance()
                ->setSubject('Activation')
                ->setFrom('cosanit@cosanit.net')
                ->setDescription('Cosanit activation')
                ->setTo($activation->getEmail())
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($activation->getMessagerie()->getMessage());

            $this->get('mailer')->send($message);


            $em->getRepository('CosanitBundle:Serials')->modif($form->get('serial')->getData(),$form->get('dateactive')->getData());
            $em = $this->getDoctrine()->getManager();


            $em->persist($activation);

            $em->flush();


            $this->addFlash(
                'notice-mail',
                "Votre demande a bien été envoyée!, Nous vous répondrons dans les plus brefs délais"
            );


            return $this->redirectToRoute('cosanit_activation');


        }


        return $this->render('CosanitBundle:Default:activation.html.twig', array(
            'activation' => $activation,
            'form' => $form->createView(),
        ));

    }


    public function searchAction( Request $request, $ville,$transaction,$duree,$types,$exclusiv)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
        $form->handleRequest($request);

        $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
        $form2->handleRequest($request);


        if($ville == 'all'){
            $ville = empty($ville);
        }

        if($duree== 'all'){
            $duree = empty($duree);
        }

        if($transaction == 'all'){
            $transaction = empty($transaction);
        }

        if($types == 'Array'){
            $types = empty($types);
        }

        if($exclusiv == 'all'){
            $exclusiv = empty($exclusiv);
        }

        if ($form2->isSubmitted() && $form2->isValid()) {

            $ville = $form2->get('categories')->getData('nom');

            $duree= $form2->get('duree')->getData();

            $transaction = $form2->get('transaction')->getData();
            if($transaction == null){
                $transaction = empty($transaction);
            }


            $trans = 'Acheter: ';
            $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
            $form2->handleRequest($request);
            if(empty($duree)){
                $duree = 'all';
            }

            $types = $form2->get('types')->getData('nom');




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




            $trans = 'Acheter: ';
            $formmobile = $this->createForm('Cosanit\CosanitBundle\Form\SearchType2');
            $formmobile->handleRequest($request);
            if(empty($duree)){
                $duree = 'all';
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

        $produits = $em->getRepository('CosanitBundle:Produits')->searchFiltre($ville,$transaction,$duree,$types,$exclusiv);
        $trans = 'Recherche: ';
        return $this->render('CosanitBundle:Default:search.html.twig', array(
            'form2' => $form2->createView(),
            'formmobile' => $formmobile->createView(),
            'produits' =>$produits,
            'trans' =>$trans,


        ));

    }


    public function searchachatAction( Request $request, $ville,$transaction,$types)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
        $form->handleRequest($request);

        $form2 = $this->createForm('Cosanit\CosanitBundle\Form\SearchType');
        $form2->handleRequest($request);


        if($ville == 'all'){
            $ville = empty($ville);
        }


        $duree = empty($duree);



        $produits = $em->getRepository('CosanitBundle:Produits')->searchFiltre($ville,$transaction,$duree,$types);
        $trans = 'Recherche: ';
        return $this->render('CosanitBundle:Default:search.html.twig', array(
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'produits' =>$produits,
            'trans' =>$trans,


        ));

    }
}
