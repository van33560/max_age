<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class exo_ageController
{
    /**
     * @Route("/max_age", name = "page_max_age")
     */
//fonction public name request permet de recuperer l' info de la variable
    public function max_age(Request $request)
    {

        $max_age = ($request->query->get('age'));

        if ( $max_age > 18 ) {
            printf  ("bienvenue");
        } else {
            printf ("desolée trop jeune ");
        }
        var_dump($max_age);
        die;

    }

}

