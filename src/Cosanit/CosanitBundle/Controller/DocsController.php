<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Docs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Doc controller.
 *
 */
class DocsController extends Controller
{
    /**
     * Lists all doc entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $docs = $em->getRepository('CosanitBundle:Docs')->findAll();

        return $this->render('docs/index.html.twig', array(
            'docs' => $docs,
        ));
    }

    /**
     * Creates a new doc entity.
     *
     */
    public function newAction(Request $request)
    {
        $doc = new Doc();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\DocsType', $doc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc);
            $em->flush();

            return $this->redirectToRoute('admin_doncs_show', array('id' => $doc->getId()));
        }

        return $this->render('docs/new.html.twig', array(
            'doc' => $doc,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a doc entity.
     *
     */
    public function showAction(Docs $doc)
    {
        $deleteForm = $this->createDeleteForm($doc);

        return $this->render('docs/show.html.twig', array(
            'doc' => $doc,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing doc entity.
     *
     */
    public function editAction(Request $request, Docs $doc)
    {
        $deleteForm = $this->createDeleteForm($doc);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\DocsType', $doc);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_docs_edit', array('id' => $doc->getId()));
        }

        return $this->render('docs/edit.html.twig', array(
            'doc' => $doc,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a doc entity.
     *
     */
    public function deleteAction(Request $request, Docs $doc)
    {
        $form = $this->createDeleteForm($doc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($doc);
            $em->flush();
        }

        return $this->redirectToRoute('admin_doncs_index');
    }

    /**
     * Creates a form to delete a doc entity.
     *
     * @param Docs $doc The doc entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Docs $doc)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_docs_delete', array('id' => $doc->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
