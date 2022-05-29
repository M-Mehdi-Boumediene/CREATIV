<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Bannieres;
use Cosanit\CosanitBundle\Form\BannieresType;

/**
 * Bannieres controller.
 *
 */
class BannieresController extends Controller
{
    /**
     * Lists all Bannieres entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $banns = $em->getRepository('CosanitBundle:Bannieres')->findAll();
        $banniere = new Bannieres();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\BannieresType', $banniere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($banniere);
            $em->flush();

            return $this->redirectToRoute('admin_bannieres_index');
        }
        ;




        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\UpdatebannieresType');
        $editForm->handleRequest($request);

        $id = $editForm['id']->getData();
        $titre = $editForm['titre']->getData();
        $texte = $editForm['texte']->getData();

        $repository = $this->getDoctrine()
            ->getRepository('CosanitBundle:Bannieres');


        if ($editForm->isSubmitted() && $editForm->isValid()) {



            $query = $repository->createQueryBuilder('u')
                ->update('CosanitBundle:Bannieres', 'u')
                ->set("u.name",'?1')
                ->set("u.texte",'?2')
                ->where("u.id = :value")
                ->setParameter("value", $id)
                ->setParameter("1", $titre)
                ->setParameter("2", $texte)

                ->getQuery()

            ;

            $query->execute();

            return $this->redirectToRoute('admin_bannieres_index');
        }

        $deleteForm = $this->createForm('Cosanit\CosanitBundle\Form\DeletebannieresType');
        $deleteForm->handleRequest($request);

        $id2 = $deleteForm['id']->getData();

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {

            $query2 = $repository->createQueryBuilder('u')
                ->delete('CosanitBundle:Bannieres', 'u')
                ->where("u.id = :id")
                ->setParameter("id",$id2)

                ->getQuery()

            ;
            $query2->execute();

            return $this->redirectToRoute('admin_bannieres_index');
        }

        return $this->render('bannieres/index.html.twig', array(
            'banns' => $banns,
            'form' => $form->createView(),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'banniere' => $banniere,

        ));
    }

    /**
     * Creates a new Bannieres entity.
     *
     */
    public function newAction(Request $request)
    {
        $banniere = new Bannieres();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\BannieresType', $banniere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($banniere);
            $em->flush();

            return $this->redirectToRoute('admin_bannieres_show', array('id' => $banniere->getId()));
        }

        return $this->render('bannieres/new.html.twig', array(
            'banniere' => $banniere,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bannieres entity.
     *
     */
    public function showAction(Bannieres $banniere)
    {
        $deleteForm = $this->createDeleteForm($banniere);

        return $this->render('bannieres/show.html.twig', array(
            'banniere' => $banniere,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bannieres entity.
     *
     */
    public function editAction(Request $request, Bannieres $banniere)
    {
        $deleteForm = $this->createDeleteForm($banniere);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\BannieresType', $banniere);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($banniere);
            $em->flush();

            return $this->redirectToRoute('admin_bannieres_edit', array('id' => $banniere->getId()));
        }

        return $this->render('bannieres/edit.html.twig', array(
            'banniere' => $banniere,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bannieres entity.
     *
     */
    public function deleteAction(Request $request, Bannieres $banniere)
    {
        $form = $this->createDeleteForm($banniere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($banniere);
            $em->flush();
        }

        return $this->redirectToRoute('admin_bannieres_index');
    }

    /**
     * Creates a form to delete a Bannieres entity.
     *
     * @param Bannieres $banniere The Bannieres entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bannieres $banniere)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_bannieres_delete', array('id' => $banniere->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
