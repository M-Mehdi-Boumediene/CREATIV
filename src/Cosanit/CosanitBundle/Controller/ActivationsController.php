<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Activations;

use Cosanit\CosanitBundle\Form\ActivationsType;


/**
 * Activations controller.
 *
 */
class ActivationsController extends Controller
{
    /**
     * Lists all Activations entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $activations = $em->getRepository('CosanitBundle:Activations')->findAll();





        return $this->render('activations/index.html.twig', array(
            'activations' => $activations,

        ));
    }
    public function activeAction($id)
    {


        $repository = $this->getDoctrine()
            ->getRepository('CosanitBundle:Activations');
        $repository2 = $this->getDoctrine()
            ->getRepository('CosanitBundle:Messagerie');
// createQueryBuilder automatically selects FROM AppBundle:Product
// and aliases it to "p"
        $query = $repository->createQueryBuilder('u')
            ->update('CosanitBundle:Activations', 'u')
            ->set("u.etat",1)
            ->where("u.id = :value")
            ->setParameter("value", $id)
            ->getQuery()

        ;

        $query2 = $repository->createQueryBuilder('u')
            ->select('u.email')
            ->from('CosanitBundle:Activations', 'p')
            ->where("p.id = :value")
            ->setParameter("value", $id)
            ->getQuery()

        ;

        $query3 = $repository2->createQueryBuilder('u')
            ->select('u.message2')
            ->from('CosanitBundle:Messagerie', 'p')
            ->getQuery()

        ;
        $products = $query->execute();
        $products2 = $query2->execute();
        $products3 = $query3->execute();

        $message = \Swift_Message::newInstance()
            ->setSubject('Activation')
            ->setFrom('cosanit@cosanit.net')
            ->setDescription('Cosanit activation')
            ->setTo($products2['0']['email'])
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody($products3['0']['message2']);

        $this->get('mailer')->send($message);

        $response = new JsonResponse();

        return $response->setData(array('activations'=>$products,'activations2'=>$products2));

        $this->addFlash(
            'notice-activation',
            "mail envoyer"
        );


        $this->get('mailer')->send($message);




    }
    public function desactiveAction($id)
    {


        $repository = $this->getDoctrine()
            ->getRepository('CosanitBundle:Activations');

// createQueryBuilder automatically selects FROM AppBundle:Product
// and aliases it to "p"
        $query = $repository->createQueryBuilder('u')
            ->update('CosanitBundle:Activations', 'u')
            ->set("u.etat",0)
            ->where("u.id = :value")
            ->setParameter("value", $id)
            ->getQuery()


        ;

        $products2 = $query->execute();

        $response2 = new JsonResponse();


        return $response2->setData(array('activations'=>$products2));



    }
    /**
     * Creates a new Activations entity.
     *
     */
    public function newAction(Request $request)
    {
        $activation = new Activations();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\ActivationsType', $activation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activation);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('Activation')
                ->setFrom($activation->getEmail())
                ->setTo('elm3hdi@gmail.com')
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody("Bonjour Vous avez reçu une demande D'activation");



            $this->get('mailer')->send($message);


            return $this->redirectToRoute('admin_Activations_show', array('id' => $activation->getId()));
        }




        return $this->render('activations/new.html.twig', array(
            'activation' => $activation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Activations entity.
     *
     */
    public function showAction(Request $request,Activations $activation)
    {
        $deleteForm = $this->createDeleteForm($activation);

        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\ActivationsType', $activation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activation);
            $em->flush();

            $this->addFlash(
                'notice-activation-edit',
                "Demande d'activation Modifier!"
            );
            return $this->redirectToRoute('admin_Activations_index');
        }
        return $this->render('activations/show.html.twig', array(
            'activation' => $activation,
            'delete_form' => $deleteForm->createView(),
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Activations entity.
     *
     */
    public function editAction(Request $request, Activations $activation)
    {
        $deleteForm = $this->createDeleteForm($activation);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\ActivationsType', $activation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activation);
            $em->flush();

            $this->addFlash(
                'notice-activation-edit',
                "Demande d'activation Modifier!"
            );
            return $this->redirectToRoute('admin_Activations_index');
        }

        return $this->render('activations/edit.html.twig', array(
            'activation' => $activation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Activations entity.
     *
     */
    public function deleteAction(Request $request, Activations $activation)
    {
        $form = $this->createDeleteForm($activation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activation);
            $em->flush();
        }

        return $this->redirectToRoute('admin_Activations_index');
    }

    /**
     * Creates a form to delete a Activations entity.
     *
     * @param Activations $activation The Activations entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Activations $activation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_Activations_delete', array('id' => $activation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }




}
