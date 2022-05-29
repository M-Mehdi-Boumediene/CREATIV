<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Mentions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Mention controller.
 *
 */
class MentionsController extends Controller
{
    /**
     * Lists all mention entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mentions = $em->getRepository('CosanitBundle:Mentions')->findAll();

        return $this->render('mentions/index.html.twig', array(
            'mentions' => $mentions,
        ));
    }

    /**
     * Creates a new mention entity.
     *
     */
    public function newAction(Request $request)
    {
        $mention = new Mention();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\MentionsType', $mention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mention);
            $em->flush();

            return $this->redirectToRoute('admin_mentions_show', array('id' => $mention->getId()));
        }

        return $this->render('mentions/new.html.twig', array(
            'mention' => $mention,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mention entity.
     *
     */
    public function showAction(Mentions $mention)
    {
        $deleteForm = $this->createDeleteForm($mention);

        return $this->render('mentions/show.html.twig', array(
            'mention' => $mention,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mention entity.
     *
     */
    public function editAction(Request $request, Mentions $mention)
    {
        $deleteForm = $this->createDeleteForm($mention);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\MentionsType', $mention);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_mentions_edit', array('id' => $mention->getId()));
        }

        return $this->render('mentions/edit.html.twig', array(
            'mention' => $mention,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mention entity.
     *
     */
    public function deleteAction(Request $request, Mentions $mention)
    {
        $form = $this->createDeleteForm($mention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mention);
            $em->flush();
        }

        return $this->redirectToRoute('admin_mentions_index');
    }

    /**
     * Creates a form to delete a mention entity.
     *
     * @param Mentions $mention The mention entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mentions $mention)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_mentions_delete', array('id' => $mention->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
