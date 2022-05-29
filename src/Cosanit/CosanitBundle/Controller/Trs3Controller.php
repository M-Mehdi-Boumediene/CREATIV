<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Trs3;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trs3 controller.
 *
 */
class Trs3Controller extends Controller
{
    /**
     * Lists all trs3 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trs3s = $em->getRepository('CosanitBundle:Trs3')->findAll();

        return $this->render('trs3/index.html.twig', array(
            'trs3s' => $trs3s,
        ));
    }

    /**
     * Creates a new trs3 entity.
     *
     */
    public function newAction(Request $request)
    {
        $trs3 = new Trs3();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Trs3Type', $trs3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trs3);
            $em->flush();

            return $this->redirectToRoute('admin_trs3_show', array('id' => $trs3->getId()));
        }

        return $this->render('trs3/new.html.twig', array(
            'trs3' => $trs3,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trs3 entity.
     *
     */
    public function showAction(Trs3 $trs3)
    {
        $deleteForm = $this->createDeleteForm($trs3);

        return $this->render('trs3/show.html.twig', array(
            'trs3' => $trs3,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trs3 entity.
     *
     */
    public function editAction(Request $request, Trs3 $trs3)
    {
        $deleteForm = $this->createDeleteForm($trs3);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Trs3Type', $trs3);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_trs3_edit', array('id' => $trs3->getId()));
        }

        return $this->render('trs3/edit.html.twig', array(
            'trs3' => $trs3,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trs3 entity.
     *
     */
    public function deleteAction(Request $request, Trs3 $trs3)
    {
        $form = $this->createDeleteForm($trs3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trs3);
            $em->flush();
        }

        return $this->redirectToRoute('admin_trs3_index');
    }

    /**
     * Creates a form to delete a trs3 entity.
     *
     * @param Trs3 $trs3 The trs3 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Trs3 $trs3)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_trs3_delete', array('id' => $trs3->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
