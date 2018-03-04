<?php

namespace App\Controller;

use App\Entity\Thingy;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ApiController
 * @package App\Controller
 * @Route("/api/v1")
 */
class ApiController extends Controller
{
    /**
     * @Route("/thingy/{id}", name="api-thingy", requirements={"id"="\d+"})
     * @param integer $id
     * @return JsonResponse
     * @throws \LogicException
     */
    public function getThingy($id)
    {
        $thingy = $this->getDoctrine()->getRepository(Thingy::class)->find($id);

        return new JsonResponse($thingy->toArray());
    }
}