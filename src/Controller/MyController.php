<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController
{
    /**
     * @Route("/page/{param}")
     * @return Response
     */
    public function index($param = "Welt")
    {
        return new Response(
            sprintf('<html><body>Hallo %s!</body></html>', $param)
        );
    }
}