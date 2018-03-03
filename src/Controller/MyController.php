<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends Controller
{
    /**
     * @Route("/page/{param}", name="page", requirements={"param"="\d+"})
     * @return Response
     * @throws \InvalidArgumentException
     */
    public function index($param = 234)
    {
        return $this->render('page.html.twig', ['page' => $param]);
    }
}