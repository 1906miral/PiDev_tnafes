<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexbackController extends AbstractController
{
    /**
     * @Route("/indexback", name="indexback")
     */
    public function index(ReclamationRepository $repository,IndexbackController $indexbackController): Response
    {
        $reclamations=$repository->countByDate();
        $dates=[];
        $reclamationCount=[];
        foreach($reclamations as $reclamation){
            $dates[] = $reclamation['dateReclam'];
            $reclamationCount[] = $reclamation['count'];
        }
        return $this->render('indexback/index.html.twig', [
            'dates' => json_encode($dates),
            'reclamationCount' => json_encode($reclamationCount),
            'users' => $indexbackController->stats(),
        ]);
    }
    public function stats()
    {
        $abonnements = $this->getDoctrine()
            ->getRepository(Abonnement::class);
        return $abonnements->createQueryBuilder('u')
            ->Select('COUNT(u.type) as pff')
            ->addSelect('u.type')
            ->groupBy('u.type')
            ->getQuery()
            ->getResult()
            ;
    }
}
