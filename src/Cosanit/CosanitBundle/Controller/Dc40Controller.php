<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Dc40;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dc40 controller.
 *
 */
class Dc40Controller extends Controller
{
    /**
     * Lists all dc40 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dc40s = $em->getRepository('CosanitBundle:Dc40')->findAll();

        return $this->render('dc40/index.html.twig', array(
            'dc40s' => $dc40s,
        ));
    }

    /**
     * Creates a new dc40 entity.
     *
     */
    public function newAction(Request $request)
    {
        $dc40 = new Dc40();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Dc40Type', $dc40);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dc40);
            $em->flush();

            return $this->redirectToRoute('admin_dc40_show', array('id' => $dc40->getId()));
        }

        return $this->render('dc40/new.html.twig', array(
            'dc40' => $dc40,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dc40 entity.
     *
     */
    public function showAction(Dc40 $dc40)
    {
        $deleteForm = $this->createDeleteForm($dc40);

        return $this->render('dc40/show.html.twig', array(
            'dc40' => $dc40,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dc40 entity.
     *
     */
    public function editAction(Request $request, Dc40 $dc40)
    {
        $deleteForm = $this->createDeleteForm($dc40);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Dc40Type', $dc40);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_dc40_edit', array('id' => $dc40->getId()));
        }

        return $this->render('dc40/edit.html.twig', array(
            'dc40' => $dc40,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dc40 entity.
     *
     */
    public function deleteAction(Request $request, Dc40 $dc40)
    {
        $form = $this->createDeleteForm($dc40);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dc40);
            $em->flush();
        }

        return $this->redirectToRoute('admin_dc40_index');
    }

    /**
     * Creates a form to delete a dc40 entity.
     *
     * @param Dc40 $dc40 The dc40 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dc40 $dc40)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_dc40_delete', array('id' => $dc40->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
