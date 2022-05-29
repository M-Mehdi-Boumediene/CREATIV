<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Pubs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pub controller.
 *
 */
class PubsController extends Controller
{
    /**
     * Lists all pub entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pubs = $em->getRepository('CosanitBundle:Pubs')->findAll();

        return $this->render('pubs/index.html.twig', array(
            'pubs' => $pubs,
        ));
    }

    /**
     * Creates a new pub entity.
     *
     */
    public function newAction(Request $request)
    {
        $pub = new Pub();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\PubsType', $pub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pub);
            $em->flush();

            return $this->redirectToRoute('admin_pubs_show', array('id' => $pub->getId()));
        }

        return $this->render('pubs/new.html.twig', array(
            'pub' => $pub,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pub entity.
     *
     */
    public function showAction(Pubs $pub)
    {
        $deleteForm = $this->createDeleteForm($pub);

        return $this->render('pubs/show.html.twig', array(
            'pub' => $pub,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pub entity.
     *
     */
    public function editAction(Request $request, Pubs $pub)
    {
        $deleteForm = $this->createDeleteForm($pub);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\PubsType', $pub);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_pubs_edit', array('id' => $pub->getId()));
        }

        return $this->render('pubs/edit.html.twig', array(
            'pub' => $pub,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pub entity.
     *
     */
    public function deleteAction(Request $request, Pubs $pub)
    {
        $form = $this->createDeleteForm($pub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pub);
            $em->flush();
        }

        return $this->redirectToRoute('admin_pubs_index');
    }

    /**
     * Creates a form to delete a pub entity.
     *
     * @param Pubs $pub The pub entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pubs $pub)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_pubs_delete', array('id' => $pub->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
