<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Parents;
use Cosanit\CosanitBundle\Form\ParentsType;

/**
 * Parents controller.
 *
 */
class ParentsController extends Controller
{
    /**
     * Lists all Parents entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $parents = $em->getRepository('CosanitBundle:Parents')->findAll();

        $parent = new Parents();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\ParentsType', $parent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($parent);
            $em->flush();

            return $this->redirectToRoute('admin_parents_index');
        }

        return $this->render('parents/index.html.twig', array(
            'parents' => $parents,
            'parent' => $parent,
            'form' => $form->createView(),

        ));
    }

    /**
     * Creates a new Parents entity.
     *
     */
    public function newAction(Request $request)
    {
        $parent = new Parents();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\ParentsType', $parent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($parent);
            $em->flush();

            return $this->redirectToRoute('admin_parents_index');
        }

        return $this->render('parents/new.html.twig', array(
            'parent' => $parent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Parents entity.
     *
     */
    public function showAction(Parents $parent)
    {
        $deleteForm = $this->createDeleteForm($parent);

        return $this->render('parents/show.html.twig', array(
            'parent' => $parent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Parents entity.
     *
     */
    public function editAction(Request $request, Parents $parent)
    {
        $deleteForm = $this->createDeleteForm($parent);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\ParentsType', $parent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($parent);
            $em->flush();

            return $this->redirectToRoute('admin_parents_edit', array('id' => $parent->getId()));
        }

        return $this->render('parents/edit.html.twig', array(
            'parent' => $parent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Parents entity.
     *
     */
    public function deleteAction(Request $request, Parents $parent)
    {
        $form = $this->createDeleteForm($parent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($parent);
            $em->flush();
        }

        return $this->redirectToRoute('admin_parents_index');
    }

    /**
     * Creates a form to delete a Parents entity.
     *
     * @param Parents $parent The Parents entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Parents $parent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_parents_delete', array('id' => $parent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
