<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Form\SerieType;
use App\Repository\SerieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SerieController extends AbstractController
{
    #[Route('/series', name: 'serie_touteslesseries')]
    public function touteslesseries(
        SerieRepository $serieRepository
    ): Response
    {
        $series = $serieRepository->findAll();
//        $series = $serieRepository->findBy(
//            [], // WHERE
//            [], // ORDER BY
//            30, // Nb enregistrements
//            0 // décalage
//        );
        return $this->render('serie/touteslesseries.html.twig',
            compact('series')
        );
    }

    #[Route(
        '/serie/{id}',
        name: 'serie_uneseuleserie',
        requirements: ['id' => '\d+']
    )]
    public function uneseuleserie(
        Serie $id
    ): Response
    {
        return $this->render('serie/uneseuleserie.html.twig',
            compact('id')
        );
    }

    #[Route('/serie/ajouter', name: 'serie_ajouterserie')]
    public function ajouterSerie(
        Request                $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $serie = new Serie();
        $serieForm = $this->createForm(SerieType::class, $serie);

        $serieForm->handleRequest($request);

        if ($serieForm->isSubmitted() && $serieForm->isValid()) {
            $entityManager->persist($serie);
            $entityManager->flush();
//            $serie = new Serie();
//            $serieForm = $this->createForm(SerieType::class, $serie);
//            return $this->redirectToRoute('serie_uneseuleserie', ["id" => $serie->getId()]);
            return $this->redirectToRoute('serie_touteslesseries');
        }

        return $this->render('serie/ajouterserie.html.twig',
            compact('serieForm')
        );
    }
}
