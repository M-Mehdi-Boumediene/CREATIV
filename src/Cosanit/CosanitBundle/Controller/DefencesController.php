<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Defences;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Defence controller.
 *
 */
class DefencesController extends Controller
{
    /**
     * Lists all defence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $defences = $em->getRepository('CosanitBundle:Defences')->findAll();

        return $this->render('defences/index.html.twig', array(
            'defences' => $defences,
        ));
    }

    /**
     * Creates a new defence entity.
     *
     */
    public function newAction(Request $request)
    {
        $defence = new Defences();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\DefencesType', $defence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($defence);
            $em->flush();

            return $this->redirectToRoute('admin_defences_show', array('id' => $defence->getId()));
        }

        return $this->render('defences/new.html.twig', array(
            'defence' => $defence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a defence entity.
     *
     */
    public function showAction(Defences $defence)
    {
        $deleteForm = $this->createDeleteForm($defence);

        return $this->render('defences/show.html.twig', array(
            'defence' => $defence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing defence entity.
     *
     */
    public function editAction(Request $request, Defences $defence)
    {
        $deleteForm = $this->createDeleteForm($defence);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\DefencesType', $defence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_defences_edit', array('id' => $defence->getId()));
        }

        return $this->render('defences/edit.html.twig', array(
            'defence' => $defence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a defence entity.
     *
     */
    public function deleteAction(Request $request, Defences $defence)
    {
        $form = $this->createDeleteForm($defence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($defence);
            $em->flush();
        }

        return $this->redirectToRoute('admin_defences_index');
    }

    /**
     * Creates a form to delete a defence entity.
     *
     * @param Defences $defence The defence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Defences $defence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_defences_delete', array('id' => $defence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
