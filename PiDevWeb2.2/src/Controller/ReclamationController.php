<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Form\ReclamationType2;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use function MongoDB\BSON\toJSON;
use MercurySeries\FlashyBundle\FlashyNotifier;
/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(NormalizerInterface $Normalizer): Response
    {

        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();
        $jsoncontent =$Normalizer->normalize($reclamations,'json',['groups'=>'reclamations:read']);
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,

        ]);
    }
    /**
     * @Route("/stats", name="stats")
     */
    public function index2(ReclamationRepository $repository)
    {
        $reclamations=$repository->countByDate();
        $dates=[];
        $reclamationCount=[];
        foreach($reclamations as $reclamation){
            $dates[] = $reclamation['dateReclam'];
            $reclamationCount[] = $reclamation['count'];
        }
        return $this->render('reclamation/stats.html.twig',[
            'dates' => json_encode($dates),
            'reclamationCount' => json_encode($reclamationCount),

        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('publication_index2');
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReclamation}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response

    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{idReclamation}/edit", name="reclamation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation,\Swift_Mailer $mailer,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(ReclamationType2::class, $reclamation);
        $form->handleRequest($request);
        $currentdate=new \DateTime('now');
        $creationdate=$reclamation->getDate();
        $diff=date_diff($currentdate,$creationdate);
       $days=intval($diff->format("%d"));

       if ($form->isSubmitted() && $form->isValid()) {
           if ($days > 3) {
               $flashy->error('Réclamation a depassé 72h depuis sa création,modification impossible!', 'http://your-awesome-link.com');
               return $this->redirectToRoute('reclamation_index');
           }
           elseif ($reclamation->getEtat()=='Traitée'){
               $flashy->error('Réclamation déja traitée!', 'http://your-awesome-link.com');
               return $this->redirectToRoute('reclamation_index');
           }
else {
           $reclamation->setDateTraitement(new \DateTime('now'));
           $this->getDoctrine()->getManager()->flush();
           $nom = $reclamation->getNomUser();
           $prenom = $reclamation->getPrenomUser();
           $email = $reclamation->getEmail();
           $phone = $reclamation->getNumtel();
           $message = (new \Swift_Message('Retour sur réclamation'))
               ->setFrom('tnafes.tnafes@gmail.com')
               ->setTo($email)
               ->setBody(
                   "Bonjour,<h1>Mr/Mme $nom $prenom ,votre réclamation est traitée avec succés,merci pour votre confiance.</h1>",
                   'text/html'
               );


           if ($reclamation->getEtat() == 'Traitée') {
               $mailer->send($message);

           }
    $flashy->success('Réclamation modifiée avec succès!', 'http://your-awesome-link.com');
           return $this->redirectToRoute('reclamation_index');
       }
       }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form2' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReclamation}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdReclamation(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index');
    }
    /**
     * @Route("/s/searchrec ", name="searchrec")
     */
    public function searchrecbyname(Request $request,NormalizerInterface $Normalizer,ReclamationRepository $repository):Response
    {

        $requestString=$request->get('searchValue');

        $reclamations = $repository->findrecByusername($requestString);
        $jsonContent = $Normalizer->normalize($reclamations, 'json',['groups'=>'reclamations:read']);
        $jsonc=json_encode($jsonContent);
        dump($jsonc);
        if(  $jsonc == "[]" )
        {
            return new Response(null);
        }
        else{        return new Response($jsonc);
        }

    }

}
