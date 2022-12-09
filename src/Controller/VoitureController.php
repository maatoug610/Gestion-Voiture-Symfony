<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/calcule/{x}/{y}/{op}", name="calcule" )
     */
    public function calculatrice(float $x , float $y , string $op): Response
    {
        switch($op){
            //somme:
            case "+":
                $result = $x + $y;
                break;
            //mult
            case "*":
                $result = $x * $y;
                break;
            //sous
            case "-":
                $result = $x - $y;
                break;
            //div
            case "div":
                $result = $x / $y;
                break;

        }

        
        return $this->render('voiture/index.html.twig', [
            'x' => $x,
            'y' => $y,
            'op' => $op,
            'result' => $result,
         
            
        ]);
    }
    /**
     * @Route("/home/{name}" , name="home_route")
     */
    public function index(string $name){
        return $this->render('voiture/index.html.twig',[
            'controller' => $name,
        ]);
    }
    /**
     * @Route("/home/index" , name="home_route2" ,priority=2)
     */
    public function index2(){
        return $this->render('voiture/index.html.twig',[
            'controller' => 'function index 2',
        ]);
    }
}
