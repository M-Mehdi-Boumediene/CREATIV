<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Rc5;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rc5 controller.
 *
 */
class Rc5Controller extends Controller
{
    /**
     * Lists all rc5 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rc5s = $em->getRepository('CosanitBundle:Rc5')->findAll();

        return $this->render('rc5/index.html.twig', array(
            'rc5s' => $rc5s,
        ));
    }

    /**
     * Creates a new rc5 entity.
     *
     */
    public function newAction(Request $request)
    {
        $rc5 = new Rc5();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Rc5Type', $rc5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rc5);
            $em->flush();

            return $this->redirectToRoute('admin_rc5_show', array('id' => $rc5->getId()));
        }

        return $this->render('rc5/new.html.twig', array(
            'rc5' => $rc5,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rc5 entity.
     *
     */
    public function showAction(Rc5 $rc5)
    {
        $deleteForm = $this->createDeleteForm($rc5);

        return $this->render('rc5/show.html.twig', array(
            'rc5' => $rc5,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rc5 entity.
     *
     */
    public function editAction(Request $request, Rc5 $rc5)
    {
        $deleteForm = $this->createDeleteForm($rc5);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Rc5Type', $rc5);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_rc5_edit', array('id' => $rc5->getId()));
        }

        return $this->render('rc5/edit.html.twig', array(
            'rc5' => $rc5,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rc5 entity.
     *
     */
    public function deleteAction(Request $request, Rc5 $rc5)
    {
        $form = $this->createDeleteForm($rc5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rc5);
            $em->flush();
        }

        return $this->redirectToRoute('admin_rc5_index');
    }

    /**
     * Creates a form to delete a rc5 entity.
     *
     * @param Rc5 $rc5 The rc5 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rc5 $rc5)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_rc5_delete', array('id' => $rc5->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
