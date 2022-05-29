<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Dc10;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dc10 controller.
 *
 */
class Dc10Controller extends Controller
{
    /**
     * Lists all dc10 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dc10s = $em->getRepository('CosanitBundle:Dc10')->findAll();

        return $this->render('dc10/index.html.twig', array(
            'dc10s' => $dc10s,
        ));
    }

    /**
     * Creates a new dc10 entity.
     *
     */
    public function newAction(Request $request)
    {
        $dc10 = new Dc10();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Dc10Type', $dc10);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dc10);
            $em->flush();

            return $this->redirectToRoute('admin_dc10_show', array('id' => $dc10->getId()));
        }

        return $this->render('dc10/new.html.twig', array(
            'dc10' => $dc10,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dc10 entity.
     *
     */
    public function showAction(Dc10 $dc10)
    {
        $deleteForm = $this->createDeleteForm($dc10);

        return $this->render('dc10/show.html.twig', array(
            'dc10' => $dc10,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dc10 entity.
     *
     */
    public function editAction(Request $request, Dc10 $dc10)
    {
        $deleteForm = $this->createDeleteForm($dc10);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Dc10Type', $dc10);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_dc10_edit', array('id' => $dc10->getId()));
        }

        return $this->render('dc10/edit.html.twig', array(
            'dc10' => $dc10,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dc10 entity.
     *
     */
    public function deleteAction(Request $request, Dc10 $dc10)
    {
        $form = $this->createDeleteForm($dc10);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dc10);
            $em->flush();
        }

        return $this->redirectToRoute('admin_dc10_index');
    }

    /**
     * Creates a form to delete a dc10 entity.
     *
     * @param Dc10 $dc10 The dc10 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dc10 $dc10)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_dc10_delete', array('id' => $dc10->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
