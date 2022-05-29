<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Aproposblock;
use Cosanit\CosanitBundle\Form\AproposblockType;

/**
 * Aproposblock controller.
 *
 */
class AproposblockController extends Controller
{
    /**
     * Lists all Aproposblock entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $aproposblocks = $em->getRepository('CosanitBundle:Aproposblock')->findAll();

        return $this->render('aproposblock/index.html.twig', array(
            'aproposblocks' => $aproposblocks,
        ));
    }

    /**
     * Creates a new Aproposblock entity.
     *
     */
    public function newAction(Request $request)
    {
        $aproposblock = new Aproposblock();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\AproposblockType', $aproposblock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aproposblock);
            $em->flush();

            return $this->redirectToRoute('admin_apropos_show', array('id' => $aproposblock->getId()));
        }

        return $this->render('aproposblock/new.html.twig', array(
            'aproposblock' => $aproposblock,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Aproposblock entity.
     *
     */
    public function showAction(Aproposblock $aproposblock)
    {
        $deleteForm = $this->createDeleteForm($aproposblock);

        return $this->render('aproposblock/show.html.twig', array(
            'aproposblock' => $aproposblock,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Aproposblock entity.
     *
     */
    public function editAction(Request $request, Aproposblock $aproposblock)
    {
        $deleteForm = $this->createDeleteForm($aproposblock);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\AproposblockType', $aproposblock);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aproposblock);
            $em->flush();

            return $this->redirectToRoute('admin_apropos_edit', array('id' => $aproposblock->getId()));
        }

        return $this->render('aproposblock/edit.html.twig', array(
            'aproposblock' => $aproposblock,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Aproposblock entity.
     *
     */
    public function deleteAction(Request $request, Aproposblock $aproposblock)
    {
        $form = $this->createDeleteForm($aproposblock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aproposblock);
            $em->flush();
        }

        return $this->redirectToRoute('admin_apropos_index');
    }

    /**
     * Creates a form to delete a Aproposblock entity.
     *
     * @param Aproposblock $aproposblock The Aproposblock entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Aproposblock $aproposblock)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_apropos_delete', array('id' => $aproposblock->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
