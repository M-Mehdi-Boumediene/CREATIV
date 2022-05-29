<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Souscriptions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Souscription controller.
 *
 */
class SouscriptionsController extends Controller
{
    /**
     * Lists all souscription entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $souscriptions = $em->getRepository('CosanitBundle:Souscriptions')->findAll();

        return $this->render('souscriptions/index.html.twig', array(
            'souscriptions' => $souscriptions,
        ));
    }

    /**
     * Creates a new souscription entity.
     *
     */
    public function newAction(Request $request)
    {
        $souscription = new Souscription();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SouscriptionsType', $souscription);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($souscription);
            $em->flush();

            return $this->redirectToRoute('admin_souscriptions_show', array('id' => $souscription->getId()));
        }

        return $this->render('souscriptions/new.html.twig', array(
            'souscription' => $souscription,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a souscription entity.
     *
     */
    public function showAction(Souscriptions $souscription)
    {
        $deleteForm = $this->createDeleteForm($souscription);

        return $this->render('souscriptions/show.html.twig', array(
            'souscription' => $souscription,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing souscription entity.
     *
     */
    public function editAction(Request $request, Souscriptions $souscription)
    {
        $deleteForm = $this->createDeleteForm($souscription);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\SouscriptionsType', $souscription);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_souscriptions_edit', array('id' => $souscription->getId()));
        }

        return $this->render('souscriptions/edit.html.twig', array(
            'souscription' => $souscription,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a souscription entity.
     *
     */
    public function deleteAction(Request $request, Souscriptions $souscription)
    {
        $form = $this->createDeleteForm($souscription);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($souscription);
            $em->flush();
        }

        return $this->redirectToRoute('admin_souscriptions_index');
    }

    /**
     * Creates a form to delete a souscription entity.
     *
     * @param Souscriptions $souscription The souscription entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Souscriptions $souscription)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_souscriptions_delete', array('id' => $souscription->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
