<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 4457;
        $myShip = [
            'name' => 'Rocinante',
            'class' => 'Battle',
            'captain' => 'Jim Holden',
            'status' => 'under maintenance',
        ];
        return $this->render('main/homepage.html.twig', [
            'numberOfStarship' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}
