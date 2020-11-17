<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class articleController
{ /**
 * @Route("/article", name = "page_article")
 */
    public function articleShowAction(Request $request)
    {

        $idArticle = ($request->query->get('id'));

        //tableau
         $articles = [
             1 => 'Article 1',
             2 => "Article 2",
             3 => "Article 3",
             4 => 'Article 4',
             5 => "Article 5",
             6 => "Article 6",
         ];
       //reponse qui contient id+articles
       $response = new response('<h1> ' . $articles[$idArticle] . '</h1>');
       //retour reponse
       return $response;
   }
}