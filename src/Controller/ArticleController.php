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
        //cette methode contiendra le numéro  de l'id dans url
    {
        //tableau
        $Articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];
        $Article = $Articles[$id];

        //j'utilise la methode render pour récupérer un fichier twig dans un dossier  template
        //retour reponse
        //recupere l'article dans le array variable article
        return $this->render('Article.html.twig',[
            'Article'=>$Article
    ]);
    }
}