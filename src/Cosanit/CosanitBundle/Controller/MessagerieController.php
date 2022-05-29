<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Messagerie;
use Cosanit\CosanitBundle\Form\MessagerieType;

/**
 * Messagerie controller.
 *
 */
class MessagerieController extends Controller
{
    /**
     * Lists all Messagerie entities.
     *
     */
    public function indexAction()
    {


        $em = $this->getDoctrine()->getManager();

        $messageries = $em->getRepository('CosanitBundle:Messagerie')->findAll();

        return $this->render('messagerie/index.html.twig', array(
            'messageries' => $messageries,
        ));
    }

    /**
     * Creates a new Messagerie entity.
     *
     */
    public function newAction(Request $request)
    {
        $messagerie = new Messagerie();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\MessagerieType', $messagerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($messagerie);
            $em->flush();

            return $this->redirectToRoute('admin_messagerie_show', array('id' => $messagerie->getId()));
        }

        return $this->render('messagerie/new.html.twig', array(
            'messagerie' => $messagerie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Messagerie entity.
     *
     */
    public function showAction(Messagerie $messagerie)
    {
        $deleteForm = $this->createDeleteForm($messagerie);

        return $this->render('messagerie/show.html.twig', array(
            'messagerie' => $messagerie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Messagerie entity.
     *
     */
    public function editAction(Request $request, Messagerie $messagerie)
    {
        $deleteForm = $this->createDeleteForm($messagerie);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\MessagerieType', $messagerie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($messagerie);
            $em->flush();
            $this->addFlash(
                'notice-messagerie',
                "Votre demande a bien été envoyée!, Nous vous répondrons dans les plus brefs délais"
            );
            return $this->redirectToRoute('admin_messagerie_edit', array('id' => $messagerie->getId()));
        }

        return $this->render('messagerie/edit.html.twig', array(
            'messagerie' => $messagerie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Messagerie entity.
     *
     */
    public function deleteAction(Request $request, Messagerie $messagerie)
    {
        $form = $this->createDeleteForm($messagerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($messagerie);
            $em->flush();
        }

        return $this->redirectToRoute('admin_messagerie_index');
    }

    /**
     * Creates a form to delete a Messagerie entity.
     *
     * @param Messagerie $messagerie The Messagerie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Messagerie $messagerie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_messagerie_delete', array('id' => $messagerie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
