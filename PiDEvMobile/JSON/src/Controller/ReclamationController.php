<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Form\ReclamationType2;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(SerializerInterface $serializer): Response
    {
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();
       $json=$serializer->serialize($reclamations,'json',['groups'=>'reclamations:read']);
       dump($json);
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
       // $json=$serializer->normalize($reclamation,'json',['groups'=>'reclamations']);
       // dump($json);

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
    public function edit(Request $request, Reclamation $reclamation,\Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ReclamationType2::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setDateTraitement(new \DateTime('now'));
            $this->getDoctrine()->getManager()->flush();
            $nom=$reclamation->getNomUser();
            $prenom=$reclamation->getPrenomUser();
            $email=$reclamation->getEmail();
            $phone=$reclamation->getNumtel();
            $message = (new \Swift_Message('Retour sur réclamation'))
                ->setFrom('tnafes.tnafes@gmail.com')
                ->setTo($email)
                ->setBody(
                  "Bonjour,<h1>Mr/Mme $nom $prenom ,votre réclamation est traitée avec succés,merci pour votre confiance.</h1>",
                    'text/html'
                )
            ;


            if($reclamation->getEtat()=='Traitée'){
                $mailer->send($message);

            }

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
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



}
