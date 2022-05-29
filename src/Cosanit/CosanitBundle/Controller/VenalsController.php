<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Venals;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Venal controller.
 *
 */
class VenalsController extends Controller
{
    /**
     * Lists all venal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $venals = $em->getRepository('CosanitBundle:Venals')->findAll();

        return $this->render('venals/index.html.twig', array(
            'venals' => $venals,
        ));
    }

    /**
     * Creates a new venal entity.
     *
     */
    public function newAction(Request $request)
    {
        $venal = new Venals();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\VenalsType', $venal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($venal);
            $em->flush();

            return $this->redirectToRoute('admin_venals_show', array('id' => $venal->getId()));
        }

        return $this->render('venals/new.html.twig', array(
            'venal' => $venal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a venal entity.
     *
     */
    public function showAction(Venals $venal)
    {
        $deleteForm = $this->createDeleteForm($venal);

        return $this->render('venals/show.html.twig', array(
            'venal' => $venal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing venal entity.
     *
     */
    public function editAction(Request $request, Venals $venal)
    {
        $deleteForm = $this->createDeleteForm($venal);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\VenalsType', $venal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_venals_edit', array('id' => $venal->getId()));
        }

        return $this->render('venals/edit.html.twig', array(
            'venal' => $venal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a venal entity.
     *
     */
    public function deleteAction(Request $request, Venals $venal)
    {
        $form = $this->createDeleteForm($venal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($venal);
            $em->flush();
        }

        return $this->redirectToRoute('admin_venals_index');
    }

    /**
     * Creates a form to delete a venal entity.
     *
     * @param Venals $venal The venal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Venals $venal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_venals_delete', array('id' => $venal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
