<?php

namespace App\Controller;
use App\taxes\calculateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{
    //sans injection à la main
//    private $calcul;
//    function __construct(){
//        $this->calcul=new calculateur();
//    }
    #[Route('/gamme', name: 'gamme')]
    public function index(calculateur $calcul): Response
    {
        //avec l'injection des dependances
        //$tva=$calcul->prixTVA(411);
        //sans injection --> à la main
//        $TVA=$this->calcul->prixTVA(100);
//        $TTC=$this->calcul->prixTTC(100);
//        dd("Ca fonctionne $TVA et $TTC");
        return $this->render('gamme/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }
    #[Route('/gamme/lister', name: 'gamme_liste')]
    public function lister(): Response
    {
        $Gamme=array('Ordinateur', 'vidéoprojeteur', 'Imprimante', 'accessoire');
        return $this->render('gamme/lister.html.twig', [
            "gammes"=> $Gamme
        ]);
    }
}

