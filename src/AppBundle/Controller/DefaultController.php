<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/nlbe", name="nlbe")
     */
    public function nlbe(Request $request){


        //Verwijzing naar formulier

        return new Response($this->renderView('nlbe/index.html.twig'));

    }

    /**
     * @Route ("/duitsland", name="duitsland")
     */
    public function duitsland(Request $request){


        //Verwijzing naar formulier

        return new Response($this->renderView('duitsland/index.html.twig'));

    }
}
