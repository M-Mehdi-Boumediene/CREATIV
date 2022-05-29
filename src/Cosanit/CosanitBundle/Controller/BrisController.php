<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Bris;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Bri controller.
 *
 */
class BrisController extends Controller
{
    /**
     * Lists all bri entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bris = $em->getRepository('CosanitBundle:Bris')->findAll();

        return $this->render('bris/index.html.twig', array(
            'bris' => $bris,
        ));
    }

    /**
     * Creates a new bri entity.
     *
     */
    public function newAction(Request $request)
    {
        $bri = new Bris();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\BrisType', $bri);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bri);
            $em->flush();

            return $this->redirectToRoute('admin_bris_show', array('id' => $bri->getId()));
        }

        return $this->render('bris/new.html.twig', array(
            'bri' => $bri,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bri entity.
     *
     */
    public function showAction(Bris $bri)
    {
        $deleteForm = $this->createDeleteForm($bri);

        return $this->render('bris/show.html.twig', array(
            'bri' => $bri,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bri entity.
     *
     */
    public function editAction(Request $request, Bris $bri)
    {
        $deleteForm = $this->createDeleteForm($bri);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\BrisType', $bri);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_bris_edit', array('id' => $bri->getId()));
        }

        return $this->render('bris/edit.html.twig', array(
            'bri' => $bri,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bri entity.
     *
     */
    public function deleteAction(Request $request, Bris $bri)
    {
        $form = $this->createDeleteForm($bri);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bri);
            $em->flush();
        }

        return $this->redirectToRoute('admin_bris_index');
    }

    /**
     * Creates a form to delete a bri entity.
     *
     * @param Bris $bri The bri entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bris $bri)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_bris_delete', array('id' => $bri->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
