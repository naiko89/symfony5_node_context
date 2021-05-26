<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AstromuController extends AbstractController
{
    #[Route('/astromu', name: 'astromu')]
    public function index(): Response
    {




        return $this->render('base.html.twig', [
            'controller_name' => 'AstromuControllerBase',
        ]);
    }
}
