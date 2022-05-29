<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Assistance1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Assistance1 controller.
 *
 */
class Assistance1Controller extends Controller
{
    /**
     * Lists all assistance1 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assistance1s = $em->getRepository('CosanitBundle:Assistance1')->findAll();

        return $this->render('assistance1/index.html.twig', array(
            'assistance1s' => $assistance1s,
        ));
    }

    /**
     * Creates a new assistance1 entity.
     *
     */
    public function newAction(Request $request)
    {
        $assistance1 = new Assistance1();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Assistance1Type', $assistance1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assistance1);
            $em->flush();

            return $this->redirectToRoute('admin_assistance1_show', array('id' => $assistance1->getId()));
        }

        return $this->render('assistance1/new.html.twig', array(
            'assistance1' => $assistance1,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a assistance1 entity.
     *
     */
    public function showAction(Assistance1 $assistance1)
    {
        $deleteForm = $this->createDeleteForm($assistance1);

        return $this->render('assistance1/show.html.twig', array(
            'assistance1' => $assistance1,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing assistance1 entity.
     *
     */
    public function editAction(Request $request, Assistance1 $assistance1)
    {
        $deleteForm = $this->createDeleteForm($assistance1);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Assistance1Type', $assistance1);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_assistance1_edit', array('id' => $assistance1->getId()));
        }

        return $this->render('assistance1/edit.html.twig', array(
            'assistance1' => $assistance1,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a assistance1 entity.
     *
     */
    public function deleteAction(Request $request, Assistance1 $assistance1)
    {
        $form = $this->createDeleteForm($assistance1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assistance1);
            $em->flush();
        }

        return $this->redirectToRoute('admin_assistance1_index');
    }

    /**
     * Creates a form to delete a assistance1 entity.
     *
     * @param Assistance1 $assistance1 The assistance1 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assistance1 $assistance1)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_assistance1_delete', array('id' => $assistance1->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
