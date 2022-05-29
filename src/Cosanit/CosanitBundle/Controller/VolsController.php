<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Vols;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Vol controller.
 *
 */
class VolsController extends Controller
{
    /**
     * Lists all vol entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vols = $em->getRepository('CosanitBundle:Vols')->findAll();

        return $this->render('vols/index.html.twig', array(
            'vols' => $vols,
        ));
    }

    /**
     * Creates a new vol entity.
     *
     */
    public function newAction(Request $request)
    {
        $vol = new Vols();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\VolsType', $vol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vol);
            $em->flush();

            return $this->redirectToRoute('admin_vols_show', array('id' => $vol->getId()));
        }

        return $this->render('vols/new.html.twig', array(
            'vol' => $vol,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vol entity.
     *
     */
    public function showAction(Vols $vol)
    {
        $deleteForm = $this->createDeleteForm($vol);

        return $this->render('vols/show.html.twig', array(
            'vol' => $vol,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vol entity.
     *
     */
    public function editAction(Request $request, Vols $vol)
    {
        $deleteForm = $this->createDeleteForm($vol);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\VolsType', $vol);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_vols_edit', array('id' => $vol->getId()));
        }

        return $this->render('vols/edit.html.twig', array(
            'vol' => $vol,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vol entity.
     *
     */
    public function deleteAction(Request $request, Vols $vol)
    {
        $form = $this->createDeleteForm($vol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vol);
            $em->flush();
        }

        return $this->redirectToRoute('admin_vols_index');
    }

    /**
     * Creates a form to delete a vol entity.
     *
     * @param Vols $vol The vol entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vols $vol)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_vols_delete', array('id' => $vol->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
