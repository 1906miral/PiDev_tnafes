<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Publication;
use App\Form\CommentaireType;
use App\Form\PublicationType;
use App\Repository\PublicationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Snipe\BanBuilder\CensorWords;

/**
 * @Route("/publication")
 */
class PublicationController extends AbstractController
{
    /**
     * @Route("/", name="publication_index", methods={"GET"})
     */
    public function index(): Response
    {
        $publications = $this->getDoctrine()
            ->getRepository(Publication::class)
            ->findAll();

        return $this->render('publication/index.html.twig', [
            'publications' => $publications,

        ]);
    }
    /**
     * @Route("/pub", name="publication_index2", methods={"GET"})
     */
    public function index2(Request $request,PaginatorInterface $paginator,PublicationRepository $repository): Response
    {
        $donnees =$repository->triedecroissant();
        $publications=$paginator->paginate(
            $donnees,// Requête contenant les données à paginer (ici les publications)
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3   // Nombre de résultats par page
        );
        return $this->render('publication/index2.html.twig', [
            'publications' => $publications,
        ]);
    }
    /**
     * @Route("/new", name="publication_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $publication = new Publication();
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($publication);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($publication);
            $entityManager->flush();

            return $this->redirectToRoute('publication_index');
        }

        return $this->render('publication/new.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPub}", name="publication_show", methods={"GET"})
     */
    public function show(Publication $publication): Response
    {
        $commentaires = $this->getDoctrine()
            ->getRepository(Commentaire::class)
            ->find($publication->getIdPub());
        dump($publication->getIdPub());
        return $this->render('publication/show.html.twig', [
            'publication' => $publication,
            'commentaires'=>$commentaires
        ]);
    }
    /**
     * @Route("/pub/{idPub}", name="publication_front", methods={"GET","POST"})
     */
    public function show2(Publication $publication,Request $request): Response
    {
        $commentaire = new Commentaire($publication);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $censor = new CensorWords;
            $langs = array('fr','it','en-us','en-uk','de','es');
            $badwords = $censor->setDictionary($langs);
            $censor->setReplaceChar("*");
            $string = $censor->censorString($commentaire->getContenuComment());
            $commentaire->setContenuComment($string['clean']);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commentaire);
            $entityManager->flush();
            return $this->redirectToRoute('publication_index2');
        }
        return $this->render('publication/publication.html.twig', [
            'publication' => $publication,
            'commentaire' => $commentaire,
            'formC' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{idPub}/edit", name="publication_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Publication $publication): Response
    {
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $publication->setDatePublication(new \DateTime('now'));
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('publication_index');
        }

        return $this->render('publication/edit.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPub}", name="publication_delete", methods={"POST"})
     */
    public function delete(Request $request, Publication $publication): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publication->getIdPub(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($publication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('publication_index');
    }

    /**
     *
     * @Route ("/tridecroissant",name="trie_decroissant")
     */

}
