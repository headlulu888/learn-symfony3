<?php
/**
 * Created by PhpStorm.
 * User: ray-pc
 * Date: 21/03/2019
 * Time: 19:21
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     * @param $genusName
     * @return Response
     */
    public function showAction($genusName)
    {
        $templating = $this->renderView('genus/show.html.twig', [
            'name' => $genusName
        ]);
//        $html = $templating->render('genus/show.html.twig', [
//            'name' => $genusName
//        ]);

        return new Response($templating);
    }
}