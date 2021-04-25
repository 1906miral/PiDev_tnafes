<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasebackController extends AbstractController
{
    /**
     * @Route("/baseback", name="baseback")
     */
    public function index(): Response
    {
        return $this->render('baseback/index.html.twig', [
            'controller_name' => 'BasebackController',
        ]);
    }

    /**
     * @return Response
     * @Route ("/gestionCat",name="gestionCat")
     */
    public function categories(): Response{
        return $this->render('baseback/categorie.html.twig',[
            'controller_name' => 'BasebackController',
        ]);
    }

    /**
     * @return Response
     * @Route ("/gestionAct",name="gestionAct")
     */
    public function activites(): Response{
        return $this->render('baseback/activite.html.twig',[
            'controller_name' => 'BasebackController',
        ]);
    }

    /**
     * @return Response
     * @Route ("/gestionArt",name="gestionArt")
     */
    public function articles(): Response{
        return $this->render('baseback/article.html.twig',[
            'controller_name' => 'BasebackController',
        ]);
    }









}
