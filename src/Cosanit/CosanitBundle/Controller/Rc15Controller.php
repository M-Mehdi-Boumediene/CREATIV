<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Rc15;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rc15 controller.
 *
 */
class Rc15Controller extends Controller
{
    /**
     * Lists all rc15 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rc15s = $em->getRepository('CosanitBundle:Rc15')->findAll();

        return $this->render('rc15/index.html.twig', array(
            'rc15s' => $rc15s,
        ));
    }

    /**
     * Creates a new rc15 entity.
     *
     */
    public function newAction(Request $request)
    {
        $rc15 = new Rc15();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Rc15Type', $rc15);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rc15);
            $em->flush();

            return $this->redirectToRoute('admin_rc15_show', array('id' => $rc15->getId()));
        }

        return $this->render('rc15/new.html.twig', array(
            'rc15' => $rc15,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rc15 entity.
     *
     */
    public function showAction(Rc15 $rc15)
    {
        $deleteForm = $this->createDeleteForm($rc15);

        return $this->render('rc15/show.html.twig', array(
            'rc15' => $rc15,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rc15 entity.
     *
     */
    public function editAction(Request $request, Rc15 $rc15)
    {
        $deleteForm = $this->createDeleteForm($rc15);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Rc15Type', $rc15);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_rc15_edit', array('id' => $rc15->getId()));
        }

        return $this->render('rc15/edit.html.twig', array(
            'rc15' => $rc15,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rc15 entity.
     *
     */
    public function deleteAction(Request $request, Rc15 $rc15)
    {
        $form = $this->createDeleteForm($rc15);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rc15);
            $em->flush();
        }

        return $this->redirectToRoute('admin_rc15_index');
    }

    /**
     * Creates a form to delete a rc15 entity.
     *
     * @param Rc15 $rc15 The rc15 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rc15 $rc15)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_rc15_delete', array('id' => $rc15->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
