<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Rc7;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rc7 controller.
 *
 */
class Rc7Controller extends Controller
{
    /**
     * Lists all rc7 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rc7s = $em->getRepository('CosanitBundle:Rc7')->findAll();

        return $this->render('rc7/index.html.twig', array(
            'rc7s' => $rc7s,
        ));
    }

    /**
     * Creates a new rc7 entity.
     *
     */
    public function newAction(Request $request)
    {
        $rc7 = new Rc7();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Rc7Type', $rc7);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rc7);
            $em->flush();

            return $this->redirectToRoute('admin_rc7_show', array('id' => $rc7->getId()));
        }

        return $this->render('rc7/new.html.twig', array(
            'rc7' => $rc7,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rc7 entity.
     *
     */
    public function showAction(Rc7 $rc7)
    {
        $deleteForm = $this->createDeleteForm($rc7);

        return $this->render('rc7/show.html.twig', array(
            'rc7' => $rc7,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rc7 entity.
     *
     */
    public function editAction(Request $request, Rc7 $rc7)
    {
        $deleteForm = $this->createDeleteForm($rc7);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Rc7Type', $rc7);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_rc7_edit', array('id' => $rc7->getId()));
        }

        return $this->render('rc7/edit.html.twig', array(
            'rc7' => $rc7,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rc7 entity.
     *
     */
    public function deleteAction(Request $request, Rc7 $rc7)
    {
        $form = $this->createDeleteForm($rc7);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rc7);
            $em->flush();
        }

        return $this->redirectToRoute('admin_rc7_index');
    }

    /**
     * Creates a form to delete a rc7 entity.
     *
     * @param Rc7 $rc7 The rc7 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rc7 $rc7)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_rc7_delete', array('id' => $rc7->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
