<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Rc3;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rc3 controller.
 *
 */
class Rc3Controller extends Controller
{
    /**
     * Lists all rc3 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rc3s = $em->getRepository('CosanitBundle:Rc3')->findAll();

        return $this->render('rc3/index.html.twig', array(
            'rc3s' => $rc3s,
        ));
    }

    /**
     * Creates a new rc3 entity.
     *
     */
    public function newAction(Request $request)
    {
        $rc3 = new Rc3();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Rc3Type', $rc3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rc3);
            $em->flush();

            return $this->redirectToRoute('admin_rc3_show', array('id' => $rc3->getId()));
        }

        return $this->render('rc3/new.html.twig', array(
            'rc3' => $rc3,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rc3 entity.
     *
     */
    public function showAction(Rc3 $rc3)
    {
        $deleteForm = $this->createDeleteForm($rc3);

        return $this->render('rc3/show.html.twig', array(
            'rc3' => $rc3,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rc3 entity.
     *
     */
    public function editAction(Request $request, Rc3 $rc3)
    {
        $deleteForm = $this->createDeleteForm($rc3);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Rc3Type', $rc3);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_rc3_edit', array('id' => $rc3->getId()));
        }

        return $this->render('rc3/edit.html.twig', array(
            'rc3' => $rc3,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rc3 entity.
     *
     */
    public function deleteAction(Request $request, Rc3 $rc3)
    {
        $form = $this->createDeleteForm($rc3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rc3);
            $em->flush();
        }

        return $this->redirectToRoute('admin_rc3_index');
    }

    /**
     * Creates a form to delete a rc3 entity.
     *
     * @param Rc3 $rc3 The rc3 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rc3 $rc3)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_rc3_delete', array('id' => $rc3->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
