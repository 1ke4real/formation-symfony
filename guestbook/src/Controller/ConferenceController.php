<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
       dump($request->query->get('name'));
        return new Response(<<<EOF
                    <html>
                        <body><a href="/admin">ADMIN</a><img src="/images/under-construction.gif" /></body>
                    </html>
                EOF);
    }
}
