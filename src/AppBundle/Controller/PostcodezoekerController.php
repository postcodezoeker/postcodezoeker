<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Nlbelevering;
use AppBundle\Entity\Dlevering;
use AppBundle\Entity\Nlbemonteur;
use AppBundle\Entity\Dmonteur;
use AppBundle\Form\Type\NlbeleveringType;
use AppBundle\Form\Type\DleveringType;
use AppBundle\Form\Type\DmonteurType;

class PostcodezoekerController extends Controller
{

    //Functie voor leverplanning van Nederland/Beglie

    /**
     * @Route ("/nlbe/levering", name="nlbelevering")
     */
    public function nlbeleveringHomepage(Request $request){

        //Variabelen
        $search = $request->get('q');
        $em = $this->getDoctrine()->getManager();

        //Ophalen van data uit database.
        $nlbelevering = $em->createQuery('Select a FROM AppBundle:Nlbelevering a WHERE a.postcode LIKE :query')
                    ->setParameter('query', $search);
                    

        //Verwijzing naar formulier
        return $this->render('nlbe/levering/Nlbelevering.html.twig', [
            'nlbelevering' => $nlbelevering->getResult(),
            'q' => $search
        ]);
    }

    //Functie voor leverplanning van Duitsland

    /**
     * @Route ("/duitsland/levering", name="duitslandlevering")
     */
    public function duitslandleveringHomepage(Request $request){

        //Variabelen
        $search = $request->get('q');
        $em = $this->getDoctrine()->getManager();

        //Ophalen van data uit database.
        $duitslandlevering = $em->createQuery('Select a FROM AppBundle:Dlevering a WHERE a.postcode LIKE :query')
                    ->setParameter('query', $search);
        

        //Verwijzing naar overzicht & en variabelen die hij meegeeft
        return $this->render('duitsland/levering/duitslandlevering.html.twig', [
            'duitslandlevering' => $duitslandlevering->getResult(),
            'q' => $search
        ]);
    }

    /**
     * @Route ("/nlbe/monteur", name="nlbemonteur")
     */
    public function nlbemonteurHomepage(Request $request){

        //Variabelen
        $search = $request->get('q');
        $em = $this->getDoctrine()->getManager();

        //Ophalen van data uit database.
        $nlbemonteur = $em->createQuery('Select a FROM AppBundle:Nlbemonteur a WHERE a.postcode LIKE :query')
                    ->setParameter('query', $search);
                    

        //Verwijzing naar formulier
        return $this->render('nlbe/monteur/Nlbemonteur.html.twig', [
            'nlbemonteur' => $nlbemonteur->getResult(),
            'q' => $search
        ]);
    }

    /**
     * @Route ("/duitsland/monteur", name="duitslandmonteur")
     */
    public function duitslandmonteurHomepage(Request $request){

        //Variabelen
        $search = $request->get('q');
        $em = $this->getDoctrine()->getManager();

        //Ophalen van data uit database.
        $duitslandmonteur = $em->createQuery('Select a FROM AppBundle:Dmonteur a WHERE a.postcode LIKE :query')
                    ->setParameter('query', $search);
        

        //Verwijzing naar overzicht & en variabelen die hij meegeeft
        return $this->render('duitsland/monteur/duitslandmonteur.html.twig', [
            'duitslandmonteur' => $duitslandmonteur->getResult(),
            'q' => $search
        ]);
    }

    /** 
    * @Route ("/beheerder/nlbelevering/wijzigen/{postcode} ", name="nlbeleveringwijzigen")
    */
    public function wijzigNlbelevering(Request $request, $postcode){
        $bestaandePostcode = $this->getDoctrine()->getRepository("AppBundle:Nlbelevering")->find($postcode);
        $form = $this->createForm(NlbeleveringType::class, $bestaandePostcode);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //Functie om bestelserie te berekenen
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandePostcode);
            $em->flush();
            //Verwijziging naar de pagina inkoper
            return $this->redirectToRoute('beheerder');
        }

        //Verwijzing naar formulier
        return $this->render('form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Planning wijzigen ' . $postcode,
            'postcode' => $bestaandePostcode,
        ]);
    }

    /** 
    * @Route ("/beheerder/dlevering/wijzigen/{postcode} ", name="dleveringwijzigen")
    */
    public function wijzigDlevering(Request $request, $postcode){
        $bestaandePostcode = $this->getDoctrine()->getRepository("AppBundle:Dlevering")->find($postcode);
        $form = $this->createForm(DleveringType::class, $bestaandePostcode);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //Functie om bestelserie te berekenen
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandePostcode);
            $em->flush();
            //Verwijziging naar de pagina inkoper
            return $this->redirectToRoute('beheerder');
        }

        //Verwijzing naar formulier
        return $this->render('form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Planning wijzigen ' . $postcode,
            'postcode' => $bestaandePostcode,
        ]);
    }

    /** 
    * @Route ("/beheerder/nlbemonteur/wijzigen/{postcode} ", name="nlbemonteurwijzigen")
    */
    public function wijzigNlbemonteur(Request $request, $postcode){
        $bestaandePostcode = $this->getDoctrine()->getRepository("AppBundle:Nlbemonteur")->find($postcode);
        $form = $this->createForm(NlbemonteurType::class, $bestaandePostcode);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //Functie om bestelserie te berekenen
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandePostcode);
            $em->flush();
            //Verwijziging naar de pagina inkoper
            return $this->redirectToRoute('beheerder');
        }

        //Verwijzing naar formulier
        return $this->render('form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Planning wijzigen ' . $postcode,
            'postcode' => $bestaandePostcode,
        ]);
    }

    /** 
    * @Route ("/beheerder/dmonteur/wijzigen/{postcode} ", name="dmonteurwijzigen")
    */
    public function wijzigDmonteur(Request $request, $postcode){
        $bestaandePostcode = $this->getDoctrine()->getRepository("AppBundle:Dmonteur")->find($postcode);
        $form = $this->createForm(NlbemonteurType::class, $bestaandePostcode);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //Functie om bestelserie te berekenen
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandePostcode);
            $em->flush();
            //Verwijziging naar de pagina inkoper
            return $this->redirectToRoute('beheerder');
        }

        //Verwijzing naar formulier
        return $this->render('form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Planning wijzigen ' . $postcode ,
            'postcode' => $bestaandePostcode,
        ]);
    }


    ///** 
    //* @Route ("/beheerder/dmonteur/wijzigen/array/ ", name="dmonteurwijzigenarray")
    //*/
    //public function wijzigDmonteur(Request $request){
        

        //Variabelen
        //$search = $request->get('q');
        //$em = $this->getDoctrine()->getManager();

        //Ophalen van data uit database.

       // $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

        //$nlbelevering = $em->createQuery('"UPDATE Dmonteur SET lastname='$' WHERE id=2"')
       //             ->setParameter('query', $search);
                    

        //Verwijzing naar formulier
       // return $this->render('nlbe/levering/Nlbelevering.html.twig', [
       //     'nlbelevering' => $nlbelevering->getResult(),
       //     'q' => $search
      //  ]);

    //}



    
}

?>
