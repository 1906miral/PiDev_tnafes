<?php

namespace App\Controller;

use App\Entity\Event;
use App\Repository\EventRepository;
use App\Entity\Participation;
use App\Form\EventType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/event")
 */
class EventController extends AbstractController
{
    /**
     * @Route("/", name="event_index", methods={"GET"})
     */
    public function index(): Response
    {
        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }



    /**
     * @Route("/Front", name="event_indexF", methods={"GET"})
     */
    public function indexF(): Response
    {
        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('event/indexF.html.twig', [
            'events' => $events,
        ]);
    }





        /**
     * @Route("/new", name="event_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);




        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('event_index');
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEvent}", name="event_show", methods={"GET"})
     */
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [

            'event' => $event,
        ]);
    }

    /**
     * @Route("//{idEvent}", name="event_show2", methods={"GET"})
     */
    public function show2(Event $event): Response
    {$a=$event->getNbPlace();
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Date invalide ,Evenement expiré!'
        );
        return $this->render('event/showF.html.twig', [
            'a'=>$a,
            'event' => $event,
        ]);
    }
    /**
     * @Route("/{idEvent}/edit", name="event_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Event $event): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('event_index');
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEvent}", name="event_delete", methods={"POST"})
     */
    public function delete(Request $request, Event $event): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getIdEvent(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('event_index');
    }
    /**
     * @Route("/c/searchEvent ", name="searchEvent")
     */
    public function searchEvent(EventRepository $repository, Request $request,NormalizerInterface $Normalizer)
    {
$requestString=$request->get('searchValue');
    $Events = $repository->findeventparlieu($requestString);
$jsonContent = $Normalizer->normalize($Events, 'json',['Groups'=>'
events:read']);
        $jsonc=json_encode($jsonContent);
        if (  $jsonc == "[]" )
        {
            return new Response(null);
        }
        else{        return new Response($jsonc);


}}


}
