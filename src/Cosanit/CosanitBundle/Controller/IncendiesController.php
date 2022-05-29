<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Incendies;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Incendy controller.
 *
 */
class IncendiesController extends Controller
{
    /**
     * Lists all incendy entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $incendies = $em->getRepository('CosanitBundle:Incendies')->findAll();

        return $this->render('incendies/index.html.twig', array(
            'incendies' => $incendies,
        ));
    }

    /**
     * Creates a new incendy entity.
     *
     */
    public function newAction(Request $request)
    {
        $incendy = new Incendies();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\IncendiesType', $incendy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($incendy);
            $em->flush();

            return $this->redirectToRoute('admin_incendies_show', array('id' => $incendy->getId()));
        }

        return $this->render('incendies/new.html.twig', array(
            'incendy' => $incendy,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a incendy entity.
     *
     */
    public function showAction(Incendies $incendy)
    {
        $deleteForm = $this->createDeleteForm($incendy);

        return $this->render('incendies/show.html.twig', array(
            'incendy' => $incendy,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing incendy entity.
     *
     */
    public function editAction(Request $request, Incendies $incendy)
    {
        $deleteForm = $this->createDeleteForm($incendy);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\IncendiesType', $incendy);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_incendies_edit', array('id' => $incendy->getId()));
        }

        return $this->render('incendies/edit.html.twig', array(
            'incendy' => $incendy,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a incendy entity.
     *
     */
    public function deleteAction(Request $request, Incendies $incendy)
    {
        $form = $this->createDeleteForm($incendy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($incendy);
            $em->flush();
        }

        return $this->redirectToRoute('admin_incendies_index');
    }

    /**
     * Creates a form to delete a incendy entity.
     *
     * @param Incendies $incendy The incendy entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Incendies $incendy)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_incendies_delete', array('id' => $incendy->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
