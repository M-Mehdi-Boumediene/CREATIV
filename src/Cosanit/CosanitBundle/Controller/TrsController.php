<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Trs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tr controller.
 *
 */
class TrsController extends Controller
{
    /**
     * Lists all tr entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trs = $em->getRepository('CosanitBundle:Trs')->findAll();

        return $this->render('trs/index.html.twig', array(
            'trs' => $trs,
        ));
    }

    /**
     * Creates a new tr entity.
     *
     */
    public function newAction(Request $request)
    {
        $tr = new Trs();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\TrsType', $tr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tr);
            $em->flush();

            return $this->redirectToRoute('admin_trs_index');
        }

        return $this->render('trs/new.html.twig', array(
            'tr' => $tr,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tr entity.
     *
     */
    public function showAction(Trs $tr)
    {
        $deleteForm = $this->createDeleteForm($tr);

        return $this->render('trs/show.html.twig', array(
            'tr' => $tr,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tr entity.
     *
     */
    public function editAction(Request $request, Trs $tr)
    {
        $deleteForm = $this->createDeleteForm($tr);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\TrsType', $tr);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_trs_edit', array('id' => $tr->getId()));
        }

        return $this->render('trs/edit.html.twig', array(
            'tr' => $tr,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tr entity.
     *
     */
    public function deleteAction(Request $request, Trs $tr)
    {
        $form = $this->createDeleteForm($tr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tr);
            $em->flush();
        }

        return $this->redirectToRoute('admin_trs_index');
    }

    /**
     * Creates a form to delete a tr entity.
     *
     * @param Trs $tr The tr entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Trs $tr)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_trs_delete', array('id' => $tr->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
