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
            'index_url' => "/",
            'about_url' => "/about",
            'report_url' => "/report",
        ]);
    }
}

