<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Dc20;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dc20 controller.
 *
 */
class Dc20Controller extends Controller
{
    /**
     * Lists all dc20 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dc20s = $em->getRepository('CosanitBundle:Dc20')->findAll();

        return $this->render('dc20/index.html.twig', array(
            'dc20s' => $dc20s,
        ));
    }

    /**
     * Creates a new dc20 entity.
     *
     */
    public function newAction(Request $request)
    {
        $dc20 = new Dc20();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Dc20Type', $dc20);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dc20);
            $em->flush();

            return $this->redirectToRoute('admin_dc20_show', array('id' => $dc20->getId()));
        }

        return $this->render('dc20/new.html.twig', array(
            'dc20' => $dc20,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dc20 entity.
     *
     */
    public function showAction(Dc20 $dc20)
    {
        $deleteForm = $this->createDeleteForm($dc20);

        return $this->render('dc20/show.html.twig', array(
            'dc20' => $dc20,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dc20 entity.
     *
     */
    public function editAction(Request $request, Dc20 $dc20)
    {
        $deleteForm = $this->createDeleteForm($dc20);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Dc20Type', $dc20);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_dc20_edit', array('id' => $dc20->getId()));
        }

        return $this->render('dc20/edit.html.twig', array(
            'dc20' => $dc20,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dc20 entity.
     *
     */
    public function deleteAction(Request $request, Dc20 $dc20)
    {
        $form = $this->createDeleteForm($dc20);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dc20);
            $em->flush();
        }

        return $this->redirectToRoute('admin_dc20_index');
    }

    /**
     * Creates a form to delete a dc20 entity.
     *
     * @param Dc20 $dc20 The dc20 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dc20 $dc20)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_dc20_delete', array('id' => $dc20->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
