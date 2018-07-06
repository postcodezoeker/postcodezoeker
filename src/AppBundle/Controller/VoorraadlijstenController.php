<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VoorraadlijstenController extends Controller
{

    /**
     * @Route ("/voorraadlijst", name="voorraadlijst")
     */
    public function voorraadlijstHomepage(Request $request){

        //Variabelen
        $search = $request->get('q');
        $em = $this->getDoctrine()->getManager();

        //Ophalen van data uit database.

        if ($search) {
                $voorraad = $em->createQuery('Select a FROM AppBundle:Voorraadlijst a WHERE a.artikelnummer LIKE :query OR a.omschrijving LIKE :query')
                    ->setParameter('query', '%'.$search.'%');
            } 
        else {
                $voorraad = $em->createQuery('Select a FROM AppBundle:Voorraadlijst a');
            }
        

        //Verwijzing naar overzicht & en variabelen die hij meegeeft
        return $this->render('voorraadlijst.html.twig', [
            'voorraad' => $voorraad->getResult(),
            'q' => $search
        ]);
    }
}

?>
