<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Dc50;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dc50 controller.
 *
 */
class Dc50Controller extends Controller
{
    /**
     * Lists all dc50 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dc50s = $em->getRepository('CosanitBundle:Dc50')->findAll();

        return $this->render('dc50/index.html.twig', array(
            'dc50s' => $dc50s,
        ));
    }

    /**
     * Creates a new dc50 entity.
     *
     */
    public function newAction(Request $request)
    {
        $dc50 = new Dc50();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\Dc50Type', $dc50);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dc50);
            $em->flush();

            return $this->redirectToRoute('admin_dc50_show', array('id' => $dc50->getId()));
        }

        return $this->render('dc50/new.html.twig', array(
            'dc50' => $dc50,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dc50 entity.
     *
     */
    public function showAction(Dc50 $dc50)
    {
        $deleteForm = $this->createDeleteForm($dc50);

        return $this->render('dc50/show.html.twig', array(
            'dc50' => $dc50,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dc50 entity.
     *
     */
    public function editAction(Request $request, Dc50 $dc50)
    {
        $deleteForm = $this->createDeleteForm($dc50);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\Dc50Type', $dc50);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_dc50_edit', array('id' => $dc50->getId()));
        }

        return $this->render('dc50/edit.html.twig', array(
            'dc50' => $dc50,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dc50 entity.
     *
     */
    public function deleteAction(Request $request, Dc50 $dc50)
    {
        $form = $this->createDeleteForm($dc50);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dc50);
            $em->flush();
        }

        return $this->redirectToRoute('admin_dc50_index');
    }

    /**
     * Creates a form to delete a dc50 entity.
     *
     * @param Dc50 $dc50 The dc50 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dc50 $dc50)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_dc50_delete', array('id' => $dc50->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
