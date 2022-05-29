<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Trs2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trs2 controller.
 *
 */
class Trs2Controller extends Controller
{
    /**
     * Lists all trs2 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trs2s = $em->getRepository('CosanitBundle:Trs2')->findAll();

        return $this->render('trs2/index.html.twig', array(
            'trs2s' => $trs2s,
        ));
    }

    /**
     * Creates a new trs2 entity.
     *
     */
    public function newAction(Request $request)
    {
        $trs2 = new Trs2();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Trs2Type', $trs2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trs2);
            $em->flush();

            return $this->redirectToRoute('admin_trs2_show', array('id' => $trs2->getId()));
        }

        return $this->render('trs2/new.html.twig', array(
            'trs2' => $trs2,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trs2 entity.
     *
     */
    public function showAction(Trs2 $trs2)
    {
        $deleteForm = $this->createDeleteForm($trs2);

        return $this->render('trs2/show.html.twig', array(
            'trs2' => $trs2,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trs2 entity.
     *
     */
    public function editAction(Request $request, Trs2 $trs2)
    {
        $deleteForm = $this->createDeleteForm($trs2);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Trs2Type', $trs2);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_trs2_edit', array('id' => $trs2->getId()));
        }

        return $this->render('trs2/edit.html.twig', array(
            'trs2' => $trs2,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trs2 entity.
     *
     */
    public function deleteAction(Request $request, Trs2 $trs2)
    {
        $form = $this->createDeleteForm($trs2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trs2);
            $em->flush();
        }

        return $this->redirectToRoute('admin_trs2_index');
    }

    /**
     * Creates a form to delete a trs2 entity.
     *
     * @param Trs2 $trs2 The trs2 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Trs2 $trs2)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_trs2_delete', array('id' => $trs2->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
