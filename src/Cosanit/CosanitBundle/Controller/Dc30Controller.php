<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Dc30;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dc30 controller.
 *
 */
class Dc30Controller extends Controller
{
    /**
     * Lists all dc30 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dc30s = $em->getRepository('CosanitBundle:Dc30')->findAll();

        return $this->render('dc30/index.html.twig', array(
            'dc30s' => $dc30s,
        ));
    }

    /**
     * Creates a new dc30 entity.
     *
     */
    public function newAction(Request $request)
    {
        $dc30 = new Dc30();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Dc30Type', $dc30);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dc30);
            $em->flush();

            return $this->redirectToRoute('admin_dc30_show', array('id' => $dc30->getId()));
        }

        return $this->render('dc30/new.html.twig', array(
            'dc30' => $dc30,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dc30 entity.
     *
     */
    public function showAction(Dc30 $dc30)
    {
        $deleteForm = $this->createDeleteForm($dc30);

        return $this->render('dc30/show.html.twig', array(
            'dc30' => $dc30,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dc30 entity.
     *
     */
    public function editAction(Request $request, Dc30 $dc30)
    {
        $deleteForm = $this->createDeleteForm($dc30);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Dc30Type', $dc30);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_dc30_edit', array('id' => $dc30->getId()));
        }

        return $this->render('dc30/edit.html.twig', array(
            'dc30' => $dc30,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dc30 entity.
     *
     */
    public function deleteAction(Request $request, Dc30 $dc30)
    {
        $form = $this->createDeleteForm($dc30);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dc30);
            $em->flush();
        }

        return $this->redirectToRoute('admin_dc30_index');
    }

    /**
     * Creates a form to delete a dc30 entity.
     *
     * @param Dc30 $dc30 The dc30 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dc30 $dc30)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_dc30_delete', array('id' => $dc30->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
