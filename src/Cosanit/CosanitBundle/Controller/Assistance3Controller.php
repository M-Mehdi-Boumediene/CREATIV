<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Assistance3;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Assistance3 controller.
 *
 */
class Assistance3Controller extends Controller
{
    /**
     * Lists all assistance3 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assistance3s = $em->getRepository('CosanitBundle:Assistance3')->findAll();

        return $this->render('assistance3/index.html.twig', array(
            'assistance3s' => $assistance3s,
        ));
    }

    /**
     * Creates a new assistance3 entity.
     *
     */
    public function newAction(Request $request)
    {
        $assistance3 = new Assistance3();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Assistance3Type', $assistance3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assistance3);
            $em->flush();

            return $this->redirectToRoute('admin_assistance3_show', array('id' => $assistance3->getId()));
        }

        return $this->render('assistance3/new.html.twig', array(
            'assistance3' => $assistance3,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a assistance3 entity.
     *
     */
    public function showAction(Assistance3 $assistance3)
    {
        $deleteForm = $this->createDeleteForm($assistance3);

        return $this->render('assistance3/show.html.twig', array(
            'assistance3' => $assistance3,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing assistance3 entity.
     *
     */
    public function editAction(Request $request, Assistance3 $assistance3)
    {
        $deleteForm = $this->createDeleteForm($assistance3);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Assistance3Type', $assistance3);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_assistance3_edit', array('id' => $assistance3->getId()));
        }

        return $this->render('assistance3/edit.html.twig', array(
            'assistance3' => $assistance3,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a assistance3 entity.
     *
     */
    public function deleteAction(Request $request, Assistance3 $assistance3)
    {
        $form = $this->createDeleteForm($assistance3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assistance3);
            $em->flush();
        }

        return $this->redirectToRoute('admin_assistance3_index');
    }

    /**
     * Creates a form to delete a assistance3 entity.
     *
     * @param Assistance3 $assistance3 The assistance3 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assistance3 $assistance3)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_assistance3_delete', array('id' => $assistance3->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
