<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Neufs;
use Cosanit\CosanitBundle\Form\NeufsType;
use Ivory\GoogleMap\Base\Bound;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Overlay\Animation;
use Ivory\GoogleMap\Overlay\Icon;
use Ivory\GoogleMap\Overlay\Marker;
use Ivory\GoogleMap\Overlay\MarkerShape;
use Ivory\GoogleMap\Overlay\MarkerShapeType;
use Ivory\GoogleMap\Overlay\Symbol;
use Ivory\GoogleMap\Overlay\SymbolPath;
use Ivory\GoogleMap\Helper\Builder\ApiHelperBuilder;
use Ivory\GoogleMap\Helper\Builder\PlaceAutocompleteHelperBuilder;
use Ivory\GoogleMap\Place\Autocomplete;
use Ivory\GoogleMap\Helper\Builder\MapHelperBuilder;

use Ivory\GoogleMap\Overlay\InfoWindow;
use Ivory\GoogleMap\Overlay\InfoWindowType;
use Ivory\GoogleMap\Event\MouseEvent;
use Ivory\GoogleMap\Place\AutocompleteComponentType;
use Ivory\GoogleMap\Place\AutocompleteType;
use Ivory\GoogleMap\Service\Geocoder\GeocoderService;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Ivory\GoogleMap\Service\Geocoder\Request\GeocoderAddressRequest;
use Ivory\GoogleMap\Service\Geocoder\Request\GeocoderCoordinateRequest;
use Ivory\GoogleMap\Event\Event;

/**
 * Neufs controller.
 *
 */
class NeufsController extends Controller
{
    /**
     * Lists all Neufs entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $neufs = $em->getRepository('CosanitBundle:Neufs')->findAll();

        return $this->render('neufs/index.html.twig', array(
            'neufs' => $neufs,
        ));
    }

    /**
     * Creates a new Neufs entity.
     *
     */
    public function newAction(Request $request)
    {
        $neuf = new Neufs();

        $form = $this->createForm('Cosanit\CosanitBundle\Form\NeufsType', $neuf);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($neuf);
            $em->flush();

            return $this->redirectToRoute('admin_neufs_index');
        }

        return $this->render('neufs/new.html.twig', array(
            'neuf' => $neuf,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Neufs entity.
     *
     */
    public function showAction(Neufs $neuf)
    {
        $deleteForm = $this->createDeleteForm($neuf);

        return $this->render('neufs/show.html.twig', array(
            'neuf' => $neuf,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Neufs entity.
     *
     */
    public function editAction(Request $request, Neufs $neuf)
    {
        $deleteForm = $this->createDeleteForm($neuf);
        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\NeufsType', $neuf);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($neuf);
            $em->flush();

            return $this->redirectToRoute('admin_neufs_edit', array('id' => $neuf->getId()));
        }

        return $this->render('neufs/edit.html.twig', array(
            'neuf' => $neuf,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Neufs entity.
     *
     */
    public function deleteAction(Request $request, Neufs $neuf)
    {
        $form = $this->createDeleteForm($neuf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($neuf);
            $em->flush();
        }

        return $this->redirectToRoute('admin_neufs_index');
    }

    /**
     * Creates a form to delete a Neufs entity.
     *
     * @param Neufs $neuf The Neufs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Neufs $neuf)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_neufs_delete', array('id' => $neuf->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    public function envoisAction(Request $request)
    {

        $editForm = $this->createForm('Cosanit\CosanitBundle\Form\EnvoisNewsType');
        $editForm->handleRequest($request);
        $adress = $editForm->get('adresseEmail')->getData();
        $mess = $editForm->get('message')->getData();
        $titre =  $editForm->get('titre')->getData();
        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $recipients = array();

            $emails = preg_split('/[,]/', $adress);
            foreach($emails as $email) {
                //check and trim the Data

                    $recipients[] = trim($email);

                $message = \Swift_Message::newInstance()
                    ->setSubject($titre)
                    ->setFrom('contact@ndwi-dz.com')

                    ->setTo($recipients)

                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody(
                        $this->renderView(
                        // templates/emails/registration.html.twig
                            'neufs/emailing.html.twig',
                            array(

                                'email'=> $emails,
                                'message' => $mess,
                            )
                        ),
                        'text/html'
                    );

                $this->get('mailer')->send($message);
            }



            $this->addFlash(
                'notice-mail',
                "Votre message à bien été envoyée!, Nous vous répondrons dans les plus brefs délais."
            );



            return $this->redirectToRoute('admin_neufs_envois');

        }

        return $this->render('neufs/envois.html.twig',array(

            'edit_form' => $editForm->createView(),

        ));
    }

}
