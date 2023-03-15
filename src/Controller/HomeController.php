<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home_index')]
    public function index(): Response
    {
        $prenom = 'Julien';
        $aujourdhui = new \DateTime();
        $titre = "<h1>Mon titre</h1>";
        return $this->render('home/index.html.twig',
            [
                "prenom"        =>  $prenom,
                "aujourdhui"    =>  $aujourdhui,
                "titre"         =>  $titre
            ]);
    }
}
