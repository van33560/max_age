<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProfileSkillsController extends AbstractController
{   /**
     * @Route("/profileSkills", name = "profileSkills")
     */

    public function profileSkills()
        //cette methode contiendra les infos du tableau
    {
        $missions =
            [
            "brésil",
            "Italie",
            "Portugale",
            "Espagne",
            ];
        //recupere les info du profile
        return $this->render('profile-skills.html.twig',
            [
                //cette varible correspond au non du
                 'missions'=> $missions

            ]
        );
    }
}

