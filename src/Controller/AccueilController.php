<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="app_accueil", methods={"GET"})
     */
    public function index(): Response
    {
        $age =17;
        $nomsStudents=['Ousmane', 'Pauline', 'Sophie', 'Chouibou'];
        // $nom="Clovis";
        return $this->render('accueil/index.html.twig', [
            'monTableau' => $nomsStudents,
            'age' => $age,
            //'lenom'=>$nom,
            //'controller_name' => 'AccueilController',
        ]);
    }
}
