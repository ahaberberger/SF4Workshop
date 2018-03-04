<?php

namespace App\Controller;

use App\Entity\Thingy;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ApiController
 * @package App\Controller
 * @Route("/api/v1")
 */
class ApiController extends Controller
{
    /**
     * @Route("/thingy/{id}", name="api-thingy", requirements={"id"="\d+"}, methods={"GET"})
     * @param integer $id
     * @return JsonResponse
     * @throws \LogicException
     */
    public function getThingy($id)
    {
        $thingy = $this->getDoctrine()->getRepository(Thingy::class)->find($id);

        return new JsonResponse($thingy->toArray());
    }

    /**
     * @Route("/thingy", name="api-post-thingy", methods={"POST"})
     * @return JsonResponse
     * @throws \LogicException
     */
    public function postThingy(Request $request)
    {
        $thingy = new Thingy();
        $content = $request->getContent();
        
        if (!empty($content))
        {
            $params = json_decode($content, true);
        }
        $thingy->setText($params['text']);
        $thingy->setNumber($params['number']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($thingy);
        $em->flush();

        return new JsonResponse($thingy->toArray());
    }
}