<?php

namespace Cosanit\CosanitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosanit\CosanitBundle\Entity\Bannieres;
use Cosanit\CosanitBundle\Form\BannieresType;
use Cosanit\CosanitBundle\Entity\Devisautos;
use Cosanit\CosanitBundle\Entity\Estimations;
use Cosanit\CosanitBundle\Entity\Photosusers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Devis automobile controller.
 *
 */
class DevisautosController extends Controller
{
    /**
     * Lists all Devis auto entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $devisauto = new Devisautos();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\DevisautosType', $devisauto);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {




            $nom = $form->get('nom')->getData();
            $telephone = $form->get('telephone')->getData();
            $garantie = $form->get('garantie')->getData();
            $duree = $form->get('dure')->getData();
            $puissance = $form->get('puissance')->getData();
            $valeur = $form->get('valeur')->getData() * 10000;
            $vols = $form->get('vols')->getData();
            $incendies = $form->get('incendies')->getData();
            $bris = $form->get('bris')->getData();
            $assistance1 = $form->get('assistance1')->getData();
            $assistance2 = $form->get('assistance2')->getData();
            $assistance3 = $form->get('assistance3')->getData();
            $defences = $form->get('defences')->getData();

            if($nom == null){
                $nom = 0;
            }

            if($telephone == null){
                $telephone = 0;
            }
            if($valeur == null){
                $valeur = 0;
            }
            if($vols == null){
                $vols = 0;
            }

            if($incendies == null){
                $incendies = 0;
            }
            if($bris == null){
                $bris = 0;
            }
            if($assistance1 == null){
                $assistance1 = 0;
            }
            if($assistance2 == null){
                $assistance2 = 0;
            }
            if($assistance3 == null){
                $assistance3 = 0;
            }
            if($defences == null){
                $defences = 0;
            }

            if($puissance == null){
                $puissance = 0;
            }
            return $this->redirectToRoute('cosanit_resultdevisauto',

                array(
                    'nom'=>$nom,
                    'telephone'=>$telephone,
                    'garantie'=>$garantie,
                    'duree'=>$duree,
                    'puissance'=>$puissance,
                    'valeur'=>$valeur,
                    'vols'=>$vols,
                    'incendies'=>$incendies,
                    'bris'=>$bris,
                    'assistance1'=>$assistance1,
                    'assistance2'=>$assistance2,
                    'assistance3'=>$assistance3,
                    'defences'=>$defences,


                ));
        }

        return $this->render('CosanitBundle:Default:devisauto.html.twig', array(
            'devisautos' => $devisauto,
            'form' => $form->createView(),

        ));
    }


    public function resultAction(Request $request, $nom,$telephone,$garantie,$duree,$puissance,$valeur,$vols,$incendies,$bris,$assistance1,$assistance2,$assistance3,$defences)
    {

        $em = $this->getDoctrine()->getManager();

        $categories =  $em->getRepository('CosanitBundle:Categories')->findAll();

        $trs3mois  = $em->getRepository('CosanitBundle:Trs')->findAll3moisasc();

        $trs6mois  = $em->getRepository('CosanitBundle:Trs')->findAll6moisasc();

        $trs1an  = $em->getRepository('CosanitBundle:Trs')->findAll1anasc();


        $dc103mois  = $em->getRepository('CosanitBundle:Dc10')->findAll3moisasc();

        $dc106mois  = $em->getRepository('CosanitBundle:Dc10')->findAll6moisasc();

        $dc101an  = $em->getRepository('CosanitBundle:Dc10')->findAll1anasc();

        $dc203mois  = $em->getRepository('CosanitBundle:Dc20')->findAll3moisasc();

        $dc206mois  = $em->getRepository('CosanitBundle:Dc20')->findAll6moisasc();

        $dc201an  = $em->getRepository('CosanitBundle:Dc20')->findAll1anasc();


        $dc303mois  = $em->getRepository('CosanitBundle:Dc30')->findAll3moisasc();

        $dc306mois  = $em->getRepository('CosanitBundle:Dc30')->findAll6moisasc();

        $dc301an  = $em->getRepository('CosanitBundle:Dc30')->findAll1anasc();


        $dc403mois  = $em->getRepository('CosanitBundle:Dc40')->findAll3moisasc();

        $dc406mois  = $em->getRepository('CosanitBundle:Dc40')->findAll6moisasc();

        $dc401an  = $em->getRepository('CosanitBundle:Dc40')->findAll1anasc();

        $dc503mois  = $em->getRepository('CosanitBundle:Dc50')->findAll3moisasc();

        $dc506mois  = $em->getRepository('CosanitBundle:Dc50')->findAll6moisasc();

        $dc501an  = $em->getRepository('CosanitBundle:Dc50')->findAll1anasc();

        $venals3mois  = $em->getRepository('CosanitBundle:Venals')->findAll3moisasc();

        $venals6mois  = $em->getRepository('CosanitBundle:Venals')->findAll6moisasc();

        $venals1an  = $em->getRepository('CosanitBundle:Venals')->findAll1anasc();


        $rc33mois  = $em->getRepository('CosanitBundle:Rc3')->findAll3moisasc();

        $rc36mois  = $em->getRepository('CosanitBundle:Rc3')->findAll6moisasc();

        $rc31an  = $em->getRepository('CosanitBundle:Rc3')->findAll1anasc();


        $rc53mois  = $em->getRepository('CosanitBundle:Rc5')->findAll3moisasc();

        $rc56mois  = $em->getRepository('CosanitBundle:Rc5')->findAll6moisasc();

        $rc51an  = $em->getRepository('CosanitBundle:Rc5')->findAll1anasc();


        $rc73mois  = $em->getRepository('CosanitBundle:Rc7')->findAll3moisasc();

        $rc76mois  = $em->getRepository('CosanitBundle:Rc7')->findAll6moisasc();

        $rc71an  = $em->getRepository('CosanitBundle:Rc7')->findAll1anasc();


        $rc103mois  = $em->getRepository('CosanitBundle:Rc10')->findAll3moisasc();

        $rc106mois  = $em->getRepository('CosanitBundle:Rc10')->findAll6moisasc();

        $rc101an  = $em->getRepository('CosanitBundle:Rc10')->findAll1anasc();

        $rc153mois  = $em->getRepository('CosanitBundle:Rc15')->findAll3moisasc();

        $rc156mois  = $em->getRepository('CosanitBundle:Rc15')->findAll6moisasc();

        $rc151an  = $em->getRepository('CosanitBundle:Rc15')->findAll1anasc();


        $vols3mois  = $em->getRepository('CosanitBundle:Vols')->findAll3moisasc();

        $vols6mois  = $em->getRepository('CosanitBundle:Vols')->findAll6moisasc();

        $vols1an  = $em->getRepository('CosanitBundle:Vols')->findAll1anasc();


        $incendies3mois  = $em->getRepository('CosanitBundle:Incendies')->findAll3moisasc();

        $incendies6mois  = $em->getRepository('CosanitBundle:Incendies')->findAll6moisasc();

        $incendies1an  = $em->getRepository('CosanitBundle:Incendies')->findAll1anasc();


        $bris3mois  = $em->getRepository('CosanitBundle:Bris')->findAll3moisasc();

        $bris6mois  = $em->getRepository('CosanitBundle:Bris')->findAll6moisasc();

        $bris1an  = $em->getRepository('CosanitBundle:Bris')->findAll1anasc();


        $assistance13mois  = $em->getRepository('CosanitBundle:Assistance1')->findAll3moisasc();

        $assistance16mois  = $em->getRepository('CosanitBundle:Assistance1')->findAll6moisasc();

        $assistance11an  = $em->getRepository('CosanitBundle:Assistance1')->findAll1anasc();


        $assistance23mois  = $em->getRepository('CosanitBundle:Assistance2')->findAll3moisasc();

        $assistance26mois  = $em->getRepository('CosanitBundle:Assistance2')->findAll6moisasc();

        $assistance21an  = $em->getRepository('CosanitBundle:Assistance2')->findAll1anasc();


        $assistance33mois  = $em->getRepository('CosanitBundle:Assistance3')->findAll3moisasc();

        $assistance36mois  = $em->getRepository('CosanitBundle:Assistance3')->findAll6moisasc();

        $assistance31an  = $em->getRepository('CosanitBundle:Assistance3')->findAll1anasc();


        $defences3mois  = $em->getRepository('CosanitBundle:Defences')->findAll3moisasc();

        $defences6mois  = $em->getRepository('CosanitBundle:Defences')->findAll6moisasc();

        $defences1an  = $em->getRepository('CosanitBundle:Defences')->findAll1anasc();

        return $this->render('CosanitBundle:Default:resultdevisauto.html.twig', array(
            'nom'=>$nom,
            'telephone'=>$telephone,
            'garantie'=>$garantie,
            'categories'=>$categories,
            'duree'=>$duree,
            'puissance'=>$puissance,
            'valeur'=>$valeur,
            'vols'=>$vols,
            'incendies'=>$incendies,
            'bris'=>$bris,
            'assistance1'=>$assistance1,
            'assistance2'=>$assistance2,
            'assistance3'=>$assistance3,
            'defences'=>$defences,

            'trs3mois'=>$trs3mois,
            'trs6mois'=>$trs6mois,
            'trs1an'=>$trs1an,

            'dc103mois'=>$dc103mois,
            'dc106mois'=>$dc106mois,
            'dc101an'=>$dc101an,

            'dc203mois'=>$dc203mois,
            'dc206mois'=>$dc206mois,
            'dc201an'=>$dc201an,

            'dc303mois'=>$dc303mois,
            'dc306mois'=>$dc306mois,
            'dc301an'=>$dc301an,

            'dc403mois'=>$dc403mois,
            'dc406mois'=>$dc406mois,
            'dc401an'=>$dc401an,

            'dc503mois'=>$dc503mois,
            'dc506mois'=>$dc506mois,
            'dc501an'=>$dc501an,

            'venals3mois'=>$venals3mois,
            'venals6mois'=>$venals6mois,
            'venals1an'=>$venals1an,

            'rc33mois'=>$rc33mois,
            'rc36mois'=>$rc36mois,
            'rc31an'=>$rc31an,

            'rc53mois'=>$rc53mois,
            'rc56mois'=>$rc56mois,
            'rc51an'=>$rc51an,

            'rc73mois'=>$rc73mois,
            'rc76mois'=>$rc76mois,
            'rc71an'=>$rc71an,

            'rc103mois'=>$rc103mois,
            'rc106mois'=>$rc106mois,
            'rc101an'=>$rc101an,

            'rc153mois'=>$rc153mois,
            'rc156mois'=>$rc156mois,
            'rc151an'=>$rc151an,

            'vols3mois'=>$vols3mois,
            'vols6mois'=>$vols6mois,
            'vols1an'=>$vols1an,

            'incendies3mois'=>$incendies3mois,
            'incendies6mois'=>$incendies6mois,
            'incendies1an'=>$incendies1an,

            'bris3mois'=>$bris3mois,
            'bris6mois'=>$bris6mois,
            'bris1an'=>$bris1an,

            'assistance13mois'=>$assistance13mois,
            'assistance16mois'=>$assistance16mois,
            'assistance11an'=>$assistance11an,

            'assistance23mois'=>$assistance23mois,
            'assistance26mois'=>$assistance26mois,
            'assistance21an'=>$assistance21an,

            'assistance33mois'=>$assistance33mois,
            'assistance36mois'=>$assistance36mois,
            'assistance31an'=>$assistance31an,


            'defences3mois'=>$defences3mois,
            'defences6mois'=>$defences6mois,
            'defences1an'=>$defences1an,


        ));
    }


    public function envoisoffreAction(Request $request,$assurance,$nom,$telephone,$garantie,$duree,$puissance,$valeur,$vols,$incendies,$bris,$assistance1,$assistance2,$assistance3,$defences)
    {
        $em = $this->getDoctrine()->getManager();


        $cateogrie  = $em->getRepository('CosanitBundle:Categories')->findOneBy(array('id'=>$assurance));
        $devisauto = new Devisautos();
        $form = $this->createForm('Cosanit\CosanitBundle\Form\EnvoisoffreType');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $nom = $form->get('nom')->getData();
            $adresse = $form->get('adresse')->getData();
            $telephone = $form->get('telephone')->getData();
            $email = $form->get('email')->getData();
            $nbplace = $form->get('nbplace')->getData();
            $datepermis = $form->get('datepermis')->getData();
            $npermis = $form->get('npermis')->getData();
            $catpermis = $form->get('catpermis')->getData();
            $wilaya = $form->get('wilaya')->getData();
            $matricule = $form->get('matricule')->getData();
            $nserie = $form->get('nserie')->getData();
            $ntype = $form->get('ntype')->getData();
            $anneecircule = $form->get('anneecircule')->getData();
            $marque = $form->get('marque')->getData();
            $modele = $form->get('modele')->getData();
            $usage = $form->get('usage')->getData();
            $genre = $form->get('genre')->getData();

            if($puissance == null){
                $puissance = 0;
            }
            if($valeur == null){
                $valeur = 0;
            }
            if($vols == null){
                $vols = 0;
            }

            if($incendies == null){
                $incendies = 0;
            }
            if($bris == null){
                $bris = 0;
            }
            if($assistance1 == null){
                $assistance1 = 0;
            }
            if($assistance2 == null){
                $assistance2 = 0;
            }
            if($assistance3 == null){
                $assistance3 = 0;
            }
            if($defences == null){
                $defences = 0;
            }

            $transport = \Swift_MailTransport::newInstance();
            $file = $request->files->get('file');


            // Create the Mailer using your created Transport
            $message = \Swift_Message::newInstance()



                ->setSubject("Demande de devis")
                ->setFrom('contact@ncomparer.com','NCOMPARER')
                ->setTo(['elm3hdi@gmail.com'])
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'CosanitBundle:Mails:mail.html.twig',
                        array(
                            'nom' => $nom,
                            'telephone' => $telephone,
                            'email' => $email,
                            'adresse' => $adresse,
                            'datepermis' => $datepermis,
                            'nbplace' => $nbplace,
                            'assurance'=>$assurance,
                            'garantie' => $garantie,
                            'duree' => $duree,
                            'puissance' => $puissance,
                            'valeur' => $valeur,
                            'vols' => $vols,
                            'incendies' => $incendies,
                            'bris' => $bris,
                            'assistance1' => $assistance1,
                            'assistance2' => $assistance2,
                            'assistance3' => $assistance3,
                            'defences' => $defences,
                            'devisautos' => $devisauto,
                            'cateogrie' => $cateogrie,
                            'npermis' => $npermis,
                            'catpermis' => $catpermis,
                            'wilaya' => $wilaya,
                            'matricule' => $matricule,
                            'nserie' => $nserie,
                            'ntype' => $ntype,
                            'anneecircule' => $anneecircule,
                            'marque' => $marque,
                            'modele' => $modele,
                            'usage' => $usage,
                            'genre' => $genre,


                        )
                    ),
                    'text/html'
                )

            ;


            $estimation = new Estimations();

            $em = $this->getDoctrine()->getManager();


            $em->persist($estimation);
            $em->flush();

            $numestimation = $em->getRepository('CosanitBundle:Estimations')->findLast();

            foreach($numestimation as $numestimation)
            {
                $n= $numestimation->getId();
            }
            $photos = $em->getRepository('CosanitBundle:Photosusers')->findBynum($n);



            foreach($photos as $photo)
            {
                $attachment = new \Swift_Attachment(file_get_contents('./uploads/'.$photo->getPath()), 'https://ncomparer.com/uploads/'.$photo->getPath(),'image/jpeg');
                $message->attach($attachment);
            }

            $this->get('mailer')->send($message);




            $this->addFlash(
                'notice',
                "Votre demande à bien été envoyé!, Nous vous contacterons dans les plus brefs délais."
            );

            return $this->redirectToRoute('cosanit_envoisoffre', array('nom' => $nom,'assurance' => $assurance,'telephone' => $telephone,'garantie' => $garantie,'duree' => $duree,'puissance' => $puissance,'valeur' => $valeur,'vols' => $vols,'incendies' => $incendies,'bris' => $bris,'assistance1' => $assistance1,'assistance2' => $assistance2,'assistance3' => $assistance3,'defences' => $defences,));

        }

        return $this->render('CosanitBundle:Default:envoisoffre.html.twig', array(
            'nom' => $nom,
            'telephone' => $telephone,
            'garantie' => $garantie,
            'duree' => $duree,
            'puissance' => $puissance,
            'valeur' => $valeur,
            'vols' => $vols,
            'incendies' => $incendies,
            'bris' => $bris,
            'assistance1' => $assistance1,
            'assistance2' => $assistance2,
            'assistance3' => $assistance3,
            'defences' => $defences,

            'devisautos' => $devisauto,
            'form' => $form->createView(),
            'cateogrie' => $cateogrie,

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
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
