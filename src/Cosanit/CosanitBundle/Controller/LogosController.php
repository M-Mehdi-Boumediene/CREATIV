<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Logos;
use Cosanit\CosanitBundle\Form\LogosType;

/**
 * Logos controller.
 *
 */
class LogosController extends Controller
{
    /**
     * Lists all Logos entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $logos = $em->getRepository('CosanitBundle:Logos')->findAll();


        $logo = new Logos();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\LogosType', $logo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($logo);
            $em->flush();

            return $this->redirectToRoute('admin_logos_show', array('id' => $logo->getId()));
        }

        return $this->render('logos/index.html.twig', array(
            'logos' => $logos,
            'logo' => $logo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Logos entity.
     *
     */
    public function newAction(Request $request)
    {
        $logo = new Logos();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\LogosType', $logo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($logo);
            $em->flush();

            $this->addFlash(
                'notice-logo',
                'Partenaire enregistrée!'
            );
            return $this->redirectToRoute('admin_logos_index');
        }

        return $this->render('logos/new.html.twig', array(
            'logo' => $logo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Logos entity.
     *
     */
    public function showAction(Logos $logo)
    {
        $deleteForm = $this->createDeleteForm($logo);

        return $this->render('logos/show.html.twig', array(
            'logo' => $logo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Logos entity.
     *
     */
    public function editAction(Request $request, Logos $logo)
    {
        $deleteForm = $this->createDeleteForm($logo);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\LogosType', $logo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($logo);
            $em->flush();

            return $this->redirectToRoute('admin_logos_edit', array('id' => $logo->getId()));
        }

        return $this->render('logos/edit.html.twig', array(
            'logo' => $logo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Logos entity.
     *
     */
    public function deleteAction(Request $request, Logos $logo)
    {
        $form = $this->createDeleteForm($logo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($logo);
            $em->flush();
        }

        return $this->redirectToRoute('admin_logos_index');
    }

    /**
     * Creates a form to delete a Logos entity.
     *
     * @param Logos $logo The Logos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Logos $logo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_logos_delete', array('id' => $logo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
