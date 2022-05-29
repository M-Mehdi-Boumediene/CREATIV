<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Souscropts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Souscropt controller.
 *
 */
class SouscroptsController extends Controller
{
    /**
     * Lists all souscropt entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $souscropts = $em->getRepository('CosanitBundle:Souscropts')->findAll();

        return $this->render('souscropts/index.html.twig', array(
            'souscropts' => $souscropts,
        ));
    }

    /**
     * Creates a new souscropt entity.
     *
     */
    public function newAction(Request $request)
    {
        $souscropt = new Souscropts();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SouscroptsType', $souscropt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($souscropt);
            $em->flush();

            return $this->redirectToRoute('admin_souscripts_show', array('id' => $souscropt->getId()));
        }

        return $this->render('souscropts/new.html.twig', array(
            'souscropt' => $souscropt,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a souscropt entity.
     *
     */
    public function showAction(Souscropts $souscropt)
    {
        $deleteForm = $this->createDeleteForm($souscropt);

        return $this->render('souscropts/show.html.twig', array(
            'souscropt' => $souscropt,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing souscropt entity.
     *
     */
    public function editAction(Request $request, Souscropts $souscropt)
    {
        $deleteForm = $this->createDeleteForm($souscropt);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\SouscroptsType', $souscropt);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_souscripts_edit', array('id' => $souscropt->getId()));
        }

        return $this->render('souscropts/edit.html.twig', array(
            'souscropt' => $souscropt,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a souscropt entity.
     *
     */
    public function deleteAction(Request $request, Souscropts $souscropt)
    {
        $form = $this->createDeleteForm($souscropt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($souscropt);
            $em->flush();
        }

        return $this->redirectToRoute('admin_souscripts_index');
    }

    /**
     * Creates a form to delete a souscropt entity.
     *
     * @param Souscropts $souscropt The souscropt entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Souscropts $souscropt)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_souscripts_delete', array('id' => $souscropt->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
