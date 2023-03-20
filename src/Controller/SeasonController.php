<?php

namespace App\Controller;

use App\Entity\Season;
use App\Form\SeasonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeasonController extends AbstractController
{
    #[Route('/season', name: 'app_season')]
    public function index(): Response
    {
        $saison = new Season();
        $saisonForm = $this->createForm(SeasonType::class, $saison);
        return $this->render('season/index.html.twig',
            compact('saisonForm')
        );
    }
}
