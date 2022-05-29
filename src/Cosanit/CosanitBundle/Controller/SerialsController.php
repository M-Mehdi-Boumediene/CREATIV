<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Serials;
use Cosanit\CosanitBundle\Form\SerialsType;

/**
 * Serials controller.
 *
 */
class SerialsController extends Controller
{
    /**
     * Lists all Serials entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $serials = $em->getRepository('CosanitBundle:Serials')->findAll();

        return $this->render('serials/index.html.twig', array(
            'serials' => $serials,
        ));
    }

    /**
     * Creates a new Serials entity.
     *
     */
    public function newAction(Request $request)
    {
        $serial = new Serials();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SerialsType', $serial);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {
            $debut = $form->get('debut')->getData();
            $fin = $form->get('fin')->getData();
            $batchSize = $fin;

            for ($i=$debut; $i<=$fin; ++$i) {

                $obj = new Serials();
                $obj->setDebut($debut);
                $obj->setActive(0);
                $obj->setFin($fin);
                $obj->setSerial($i);

                // ... set more data
                $em->persist($obj);
                if (($i % $batchSize) == 0) {
                    $em->flush();
                    $em->clear();
                }
            }



            return $this->redirectToRoute('admin_serials_index');
        }

        return $this->render('serials/new.html.twig', array(
            'serial' => $serial,
            'form' => $form->createView(),
        ));
    }


    public function suppSerieAction(Request $request)
    {
        $serial = new Serials();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\SerialsType', $serial);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();



        if ($form->isSubmitted() && $form->isValid()) {

            $debut = $form->get('debut')->getData();
            $fin = $form->get('fin')->getData();
            $batchSize = $fin;

            for ($i=$debut; $i<=$fin; ++$i) {

                $serie = $em->getRepository('CosanitBundle:Serials')->del($debut,$fin);

                if (($i % $batchSize) == 0) {
                    $em->flush();
                    $em->clear();
                }
            }



            

            return $this->redirectToRoute('admin_serials_index');
        }

        return $this->render('serials/supp-serie.html.twig', array(
            'serial' => $serial,
            'form' => $form->createView(),
        ));
    }
    
    /**
     * Finds and displays a Serials entity.
     *
     */
    public function showAction(Serials $serial)
    {
        $deleteForm = $this->createDeleteForm($serial);

        return $this->render('serials/show.html.twig', array(
            'serial' => $serial,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Serials entity.
     *
     */
    public function editAction(Request $request, Serials $serial)
    {
        $deleteForm = $this->createDeleteForm($serial);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\SerialsType', $serial);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serial);
            $em->flush();

            return $this->redirectToRoute('admin_serials_edit', array('id' => $serial->getId()));
        }

        return $this->render('serials/edit.html.twig', array(
            'serial' => $serial,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Serials entity.
     *
     */
    public function deleteAction(Request $request, Serials $serial)
    {
        $form = $this->createDeleteForm($serial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serial);
            $em->flush();
        }

        return $this->redirectToRoute('admin_serials_index');
    }

    /**
     * Creates a form to delete a Serials entity.
     *
     * @param Serials $serial The Serials entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Serials $serial)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_serials_delete', array('id' => $serial->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
