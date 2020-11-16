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
        //$request ->request permet de recuperer les donees du post
        // permet de creer une instance de la class response
        // et retourner une reponse serveur  je stock le resultat
        // $response = new response(content:'<h1>hello david'</h1>;
        // je retourne la variable $response qui contient ma reponse http
        //return $response


       //pour degeuger var_dump($max_age);
        // pour debeuger die;

    }

}

