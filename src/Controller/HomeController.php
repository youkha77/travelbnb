<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/hello/{prenom}" , name="hello")
     * 
     * @return void
     */
    
    public function hello($prenom = "anomyme") {

        return new Response("hiii " . $prenom);

    }


    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        $prenoms = ["khai" => 33 , "yuka" => 25 , "Aurelie" => 28 ];

        return $this->render('home/index.html.twig', 
        [
            'title' => 'Bonjour a tous',
            'age' => 31,
            'tableau' => $prenoms
        ]);
    }
}
