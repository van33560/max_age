<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{   /**
 * @Route("/Article/{id}", name = "page_Article")
 */
    //pour récupérer les id apres article /{id}"whild card"
    public function ArticleShowAction($id)
        //cette variable contiendra le numéro  de l'id
    {
        //tableau
        $Article = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];
        //j'utilise la methode render qui va recuperer un fichier twig dans un dossier template,et retourner une reponse en http
        //retour reponse
        return $this->render('Article.html.twig');
    }
}