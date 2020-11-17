<?php

namespace App\Controller;
//chemin fichier controller


use Symfony\Component\Routing\Annotation\Route;
//chemin route annotation de @route
use Symfony\Component\HttpFoundation\Response;
//chemin http response
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//chemin de la methode abstractcontroller


class FormulaireController extends AbstractController
//heritage classe, parent
{
    /**
     * @Route("/Accueil",name="Accueil")
     */
    public function Accueil()
    {
        return new Response ("Accueil");
    }


    /**
    * @Route("/Formulaire", name="Formulaire")
     */
    //chemin d'accés route Form plus name de la page

    public function Formulaire ()
    {
    //methode pour recuperer l'info du form sinon redirection page accueil
        $IsFormSubmitted = true;
        //comparer si reponse est vrai return new
            if(!$IsFormSubmitted){
                return new Response('Merci pour votre retour');

            }else{
                return $this -> redirectToRoute("Accueil");

            }

        }






}