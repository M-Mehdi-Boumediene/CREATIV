<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Apropos;
use Cosanit\CosanitBundle\Form\AproposType;

/**
 * Apropos controller.
 *
 */
class AproposController extends Controller
{
    /**
     * Lists all Apropos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $apropos = $em->getRepository('CosanitBundle:Apropos')->findAll();

        return $this->render('apropos/index.html.twig', array(
            'apropos' => $apropos,
        ));
    }

    /**
     * Creates a new Apropos entity.
     *
     */
    public function newAction(Request $request)
    {
        $apropo = new Apropos();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\AproposType', $apropo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($apropo);
            $em->flush();

            return $this->redirectToRoute('admin_about_show', array('id' => $apropo->getId()));
        }

        return $this->render('apropos/new.html.twig', array(
            'apropo' => $apropo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Apropos entity.
     *
     */
    public function showAction(Apropos $apropo)
    {
        $deleteForm = $this->createDeleteForm($apropo);

        return $this->render('apropos/show.html.twig', array(
            'apropo' => $apropo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Apropos entity.
     *
     */
    public function editAction(Request $request, Apropos $apropo)
    {
        $deleteForm = $this->createDeleteForm($apropo);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\AproposType', $apropo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($apropo);
            $em->flush();

            return $this->redirectToRoute('admin_about_edit', array('id' => $apropo->getId()));
        }

        return $this->render('apropos/edit.html.twig', array(
            'apropo' => $apropo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Apropos entity.
     *
     */
    public function deleteAction(Request $request, Apropos $apropo)
    {
        $form = $this->createDeleteForm($apropo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($apropo);
            $em->flush();
        }

        return $this->redirectToRoute('admin_about_index');
    }

    /**
     * Creates a form to delete a Apropos entity.
     *
     * @param Apropos $apropo The Apropos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Apropos $apropo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_about_delete', array('id' => $apropo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
