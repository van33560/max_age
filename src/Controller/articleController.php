<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class articleController
{ /**
 * @Route("/article/{id}", name = "page_article")//pour récupérer les id apres article /{id}"whild card
 */
    public function articleShowAction($id)//cette variable contiendra le numéro  de l'id
    {
        //tableau
         $article = [
             1 => 'Article 1',
             2 => "Article 2",
             3 => "Article 3",
             4 => 'Article 4',
             5 => "Article 5",
             6 => "Article 6",
         ];
       //reponse qui contient l'id de l'article
       $response = new response('<h1> ' . $article[$id] . '</h1>');
       //retour reponse
       return $response;
   }
}