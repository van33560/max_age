<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class agentsController extends AbstractController
//je crée une nouvelle route pour recuperer id
{   /**
    * @Route("/agent/{id}", name="agentShow")
    */
// je crée une nouvelle méthode qui va permettre de récupérer le contenu de chaque id
    public function agentShow($id){

        $agents = [
            1 => [
                "id" =>1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" =>2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" =>3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" =>4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" =>5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];
        $agent = $agents[$id];
        //je renvoi sur ma page twig les infos de mon tableau par id
        return $this->render('agent.html.twig',[
            'agent'=> $agent

        ]);

    }



    /**
     * @Route("/agents", name="agents")
     */

    public function tableauAgents()
        //cette methode contiendra les infos du tableau agents
    {
        $agents = [
            1 => [
                "id" =>1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [

                "id" =>2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" =>3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" =>4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" =>5,
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

