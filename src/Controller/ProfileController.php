<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProfileController extends AbstractController
{   /**
     * @Route("/Profile", name = "Profile_show")
     */

    public function ProfileShow()
        //cette methode contiendra les infos du tableau
    {
        $profile = [
            "firstname" => "Flantier",
            "name" => "Noel",
            "age" => 40,
            "comment"=>"Le metier de cette personne est",
            "job" => "secret agent",
            "active" => true
        ];


        //recupere les info du profile
        return $this->render('Profile.html.twig',
            [
                'profile' => $profile
            ]
        );
    }
}
