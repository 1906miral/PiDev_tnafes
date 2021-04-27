<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Participation;
use App\Form\ParticipationType;
use MercurySeries\FlashyBundle\FlashyNotifier;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;

/**
 * @Route("/participation")
 */
class ParticipationController extends AbstractController
{
    /**
     * @Route("/", name="participation_index", methods={"GET"})
     */
    public function index(): Response
    {
        $participations = $this->getDoctrine()
            ->getRepository(Participation::class)
            ->findAll();

        return $this->render('participation/index.html.twig', [
            'participations' => $participations,
        ]);
    }

    /**
     * @Route("/{idEvent}", name="participation_new", methods={"GET","POST"})
     */
    public function new(Request $request, Event $event,FlashyNotifier $flashy): Response
    {       $b=$event->getNbPlace();
        $participation = new Participation();

        $participation->setDatePart(new \DateTime('now'));

        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);
        $flashy->success('Event created!', 'http://your-awesome-link.com');

        if ($form->isSubmitted() && $form->isValid()) {

            $sid = "ACcff26097e60f12279cd1cb1a72b05f37"; // Your Account SID from www.twilio.com/console
            $token = "2589c832952f2a96b22090f98f555a5f"; // Your Auth Token from www.twilio.com/console

            $client = new Client($sid, $token);
            $message = $client->messages->create(
                '+21692516334', // Text this number
                [
                    'from' => '+14049238177', // From a valid Twilio number
                    'body' => 'Hello from Twilio!'
                ]
            );
       // return $this->redirectToRoute('event_indexF');

$event->setNbPlace($event->getNbPlace()-1);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($participation);
            $entityManager->flush();

           return $this->redirectToRoute('event_indexF');


        }


        return $this->render('participation/new.html.twig', [

            'participation' => $participation,
            'form' => $form->createView(),
            'b'=> $b,
        ]);



    }


    /**
     * @Route("/{idParticipation}", name="participation_show", methods={"GET"})
     */
    public function show(Participation $participation): Response
    {
        return $this->render('participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    /**
     * @Route("/{idParticipation}/edit", name="participation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Participation $participation): Response
    {
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participation_index');
        }

        return $this->render('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipation}", name="participation_delete", methods={"POST"})
     */
    public function delete(Request $request, Participation $participation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participation->getIdParticipation(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participation_index');
    }
}
