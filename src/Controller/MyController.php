<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function index()
    {
        return new Response(
            '<html><body>Hallo Welt!</body></html>'
        );
    }
}