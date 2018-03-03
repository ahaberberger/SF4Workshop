<?php

namespace App\Controller;

use App\Entity\Thingy;
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

    /**
     * @Route("/thingy/{id}", name="thingy", requirements={"id"="\d+"})
     * @param integer $id
     */
    public function getThingy($id)
    {
        $thingy = $this->getDoctrine()->getRepository(Thingy::class)->find($id);

        return $this->render('thingy.html.twig', ['thingy' => $thingy]);
    }
}