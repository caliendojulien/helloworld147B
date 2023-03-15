<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
