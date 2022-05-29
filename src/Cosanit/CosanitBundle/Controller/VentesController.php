<?php

namespace Cosanit\CosanitBundle\Controller;

use Cosanit\CosanitBundle\Entity\Estimations;
use Cosanit\CosanitBundle\Entity\Photosusers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Cosanit\CosanitBundle\Entity\Activations;
use Cosanit\CosanitBundle\Entity\Messagerie;
use Cosanit\CosanitBundle\Form\ActivationsType;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\JsonResponse;

class VentesController extends Controller
{
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $parents = $em->getRepository('CosanitBundle:Parents')->findAll();

        $estimation = new Estimations();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\EstimimmoType',$estimation);
        $form->handleRequest($request);

        $en= $form->get('en')->getData();
        $type= $form->get('type')->getData();
        $np= $form->get('np')->getData();
        $surfaceh= $form->get('surfaceh')->getData();
        $surfacet= $form->get('surfacet')->getData();
        $precision= $form->get('message')->getData();


        $nom= $form->get('nom')->getData();
        $prenom= $form->get('prenom')->getData();
        $adresse= $form->get('adresse')->getData();
        $codepostal= $form->get('codepostal')->getData();
        $cpostal= $form->get('cpostal')->getData();
        $ville= $form->get('ville')->getData();
        $ville2= $form->get('ville2')->getData();
        $telephone= $form->get('tel')->getData();
        $email= $form->get('email')->getData();


        if ($form->isSubmitted() && $form->isValid() ) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($estimation);
            $em->flush();

            $transport = \Swift_MailTransport::newInstance();
            $file = $request->files->get('file');


            // Create the Mailer using your created Transport
            $message = \Swift_Message::newInstance()



                ->setSubject("Demande d'estimation")
                ->setFrom('contact@globalluxuryservices.com')
                ->setTo('contact@globalluxuryservices.com')
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'CosanitBundle:Mails:mail.html.twig',
                        array(
                            'en' => $en,
                            'type' => $type,
                            'np' => $np,
                            'surfaceh' => $surfaceh,
                            'surfacet' => $surfacet,
                            'precision' => $precision,
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'adresse' => $adresse,
                            'codepostal'=> $codepostal,
                            'cpostal'=> $cpostal,
                            'ville'=> $ville,
                            'ville2'=> $ville2,
                            'telephone'=> $telephone,
                            'email'=> $email,

                        )
                    ),
                    'text/html'
                )

            ;
            $numestimation = $em->getRepository('CosanitBundle:Estimations')->findLast();

            foreach($numestimation as $numestimation)
            {
                $n= $numestimation->getId();
            }
            $photos = $em->getRepository('CosanitBundle:Photosusers')->findBynum($n);



            foreach($photos as $photo)
            {
                $attachment = new \Swift_Attachment(file_get_contents('./uploads/'.$photo->getPath()), 'http://globalluxuryservices.com/uploads/'.$photo->getPath(),'image/jpeg');
                $message->attach($attachment);
            }

            $this->get('mailer')->send($message);




            $this->addFlash(
                'notice-mail',
                "Votre demande d'estimation à bien été envoyée!, Nous vous contacterons dans les plus brefs délais"
            );


            return $this->redirectToRoute('cosanit_ventes');


        }
        return $this->render('CosanitBundle:Default:ventes.html.twig', array(

            'parents' =>$parents,
            'form' => $form->createView(),


        ));


    }

    public function uploadtofsAction(Request $request){
        $output = array('uploaded' => false);
        // get the file from the request object
        $file = $request->files->get('file');
        // generate a new filename (safer, better approach)
        // To use original filename, $fileName = $this->file->getClientOriginalName();
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        // set your uploads directory
        $uploadDir = $this->get('kernel')->getRootDir() . '/../web/uploads/';
        if (!file_exists($uploadDir) && !is_dir($uploadDir)) {
            mkdir($uploadDir, 0775, true);
        }
        $em = $this->getDoctrine()->getManager();
        $numestimation = $em->getRepository('CosanitBundle:Estimations')->findLast();

        if($numestimation){
        foreach($numestimation as $numestimation)
        {
            $num= $numestimation->getId() +1;
        }

        }
        if ($file->move($uploadDir, $fileName)) {

            $em = $this->getDoctrine()->getManager();
            // create and set this mediaEntity
            $mediaEntity = new Photosusers();
            $mediaEntity->setPath($fileName);
            $mediaEntity->setEmail($num);
            // save the uploaded filename to database
            $em->persist($mediaEntity);
            $em->flush();
            $output['uploaded'] = true;
            $output['fileName'] = $fileName;
            $output['mediaEntityId'] = $mediaEntity->getId();
            $output['originalFileName'] = $file->getClientOriginalName();
        }
        return new JsonResponse($output);



    }
    public function deleteresourceAction(Request $request){
        $output = array('deleted' => false, 'error' => false);
        $mediaID = $request->get('id');
        $fileName = $request->get('fileName');
        $em = $this->getDoctrine()->getManager();
        $media = $em->find('CosanitBundle:Photosusers', $mediaID);
        if ($fileName && $media && $media instanceof Photosusers) {
            $uploadDir = $this->get('kernel')->getRootDir() . '/../web/uploads/';
            $output['deleted'] = unlink($uploadDir.$fileName);
            if ($output['deleted']) {
                // delete linked mediaEntity
                $em = $this->getDoctrine()->getManager();
                $em->remove($media);
                $em->flush();
            }
        } else {
            $output['error'] = 'Missing/Incorrect Media ID and/or FileName';
        }
        return new JsonResponse($output);
    }

}
