<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Assistance2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Assistance2 controller.
 *
 */
class Assistance2Controller extends Controller
{
    /**
     * Lists all assistance2 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assistance2s = $em->getRepository('CosanitBundle:Assistance2')->findAll();

        return $this->render('assistance2/index.html.twig', array(
            'assistance2s' => $assistance2s,
        ));
    }

    /**
     * Creates a new assistance2 entity.
     *
     */
    public function newAction(Request $request)
    {
        $assistance2 = new Assistance2();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Assistance2Type', $assistance2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assistance2);
            $em->flush();

            return $this->redirectToRoute('admin_assistance2_show', array('id' => $assistance2->getId()));
        }

        return $this->render('assistance2/new.html.twig', array(
            'assistance2' => $assistance2,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a assistance2 entity.
     *
     */
    public function showAction(Assistance2 $assistance2)
    {
        $deleteForm = $this->createDeleteForm($assistance2);

        return $this->render('assistance2/show.html.twig', array(
            'assistance2' => $assistance2,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing assistance2 entity.
     *
     */
    public function editAction(Request $request, Assistance2 $assistance2)
    {
        $deleteForm = $this->createDeleteForm($assistance2);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Assistance2Type', $assistance2);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_assistance2_edit', array('id' => $assistance2->getId()));
        }

        return $this->render('assistance2/edit.html.twig', array(
            'assistance2' => $assistance2,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a assistance2 entity.
     *
     */
    public function deleteAction(Request $request, Assistance2 $assistance2)
    {
        $form = $this->createDeleteForm($assistance2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assistance2);
            $em->flush();
        }

        return $this->redirectToRoute('admin_assistance2_index');
    }

    /**
     * Creates a form to delete a assistance2 entity.
     *
     * @param Assistance2 $assistance2 The assistance2 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assistance2 $assistance2)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_assistance2_delete', array('id' => $assistance2->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
