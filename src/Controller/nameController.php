<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class nameController
{
    /**
    * @Route("/nomPrenom", name = "page_nomPrenom")
    */
//fonction public name request permet de recuperer l' info de la variable
public function nomPrenom(Request $request)
{
// permet de recuperer les données du get
        $nomPrenom = $request->query->get('nomPrenom');

// permet de creer une instance de la class response
        $response = new response('<p>Bonjour ' . $nomPrenom . '</p>');


// je retourne reponse http
        return $response;




}
}