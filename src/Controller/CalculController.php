<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/home', name: 'app_calcul')]
    public function home(): Response
    {
        $x=100;
        $y=2;
        return $this->render('calcul/home.html.twig', [
            'x'=>$x, 'y'=>$y
        ]);
    }
    #[Route('/somme/{num1<\d+>}/{num2<\d+>}', name: 'app_calcul_somme')]
    public function somme($num1, $num2): Response
    {
        return $this->render('calcul/somme.html.twig', [
            'a'=>$num1, 'b'=>$num2
        ]);
    }
    #[Route('/soustraction/{num1<\d+>}/{num2<\d+>}', name: 'app_calcul_soustraction')]
    public function soustraction($num1, $num2): Response
    {
        return $this->render('calcul/soustraction.html.twig', [
            'a'=>$num1, 'b'=>$num2
        ]);
    }
}
