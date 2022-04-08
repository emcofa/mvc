<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    /**
     * @Route("/card", name="card")
     */
    public function card(): Response
    {
        return $this->render('card/card-landingpage.html.twig', [
            'allCards' => "/card/deck",
            'shuffle' => "/card/deck/shuffle",
            'draw' => "/card/deck/draw",
            'drawNumber' => "/card/deck/draw/2",
            'allJson' => "/card/api/deck",
            'shuffleJson' => "/card/api/deck/shuffle",
        ]);
    }
}

