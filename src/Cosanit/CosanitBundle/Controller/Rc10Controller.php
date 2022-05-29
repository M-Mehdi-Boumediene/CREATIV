<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Rc10;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rc10 controller.
 *
 */
class Rc10Controller extends Controller
{
    /**
     * Lists all rc10 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rc10s = $em->getRepository('CosanitBundle:Rc10')->findAll();

        return $this->render('rc10/index.html.twig', array(
            'rc10s' => $rc10s,
        ));
    }

    /**
     * Creates a new rc10 entity.
     *
     */
    public function newAction(Request $request)
    {
        $rc10 = new Rc10();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Rc10Type', $rc10);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rc10);
            $em->flush();

            return $this->redirectToRoute('admin_rc10_show', array('id' => $rc10->getId()));
        }

        return $this->render('rc10/new.html.twig', array(
            'rc10' => $rc10,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rc10 entity.
     *
     */
    public function showAction(Rc10 $rc10)
    {
        $deleteForm = $this->createDeleteForm($rc10);

        return $this->render('rc10/show.html.twig', array(
            'rc10' => $rc10,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rc10 entity.
     *
     */
    public function editAction(Request $request, Rc10 $rc10)
    {
        $deleteForm = $this->createDeleteForm($rc10);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Rc10Type', $rc10);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_rc10_edit', array('id' => $rc10->getId()));
        }

        return $this->render('rc10/edit.html.twig', array(
            'rc10' => $rc10,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rc10 entity.
     *
     */
    public function deleteAction(Request $request, Rc10 $rc10)
    {
        $form = $this->createDeleteForm($rc10);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rc10);
            $em->flush();
        }

        return $this->redirectToRoute('admin_rc10_index');
    }

    /**
     * Creates a form to delete a rc10 entity.
     *
     * @param Rc10 $rc10 The rc10 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rc10 $rc10)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_rc10_delete', array('id' => $rc10->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
