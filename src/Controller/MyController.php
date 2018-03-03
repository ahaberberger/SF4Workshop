<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController
{
    /**
     * @Route("/page/{param}", name="page", requirements={"param"="\d+"})
     * @return Response
     * @throws \InvalidArgumentException
     */
    public function index($param = 234)
    {
        return new Response(
            sprintf('<html><body>This is page no %d!</body></html>', $param)
        );
    }
}