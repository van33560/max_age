<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class agentsController extends AbstractController
{   /**
     * @Route("/agents", name="agents")
     */

    public function tableauAgents()
        //cette methode contiendra les infos du tableau agents
    {
        $agents = [
            1 => [
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];



        //recupere les infos des agents
        return $this->render('agents.html.twig',[
            'agents'=> $agents
        ]);
                //agents renvoi le contenu du tableau a la page twig
    }
}

