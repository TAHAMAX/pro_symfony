<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommenterController extends AbstractController
{
    /**
     * @Route("/commenter", name="commenter")
     */
    public function index()
    {
        $commenter = $this->getDoctrine()
        ->getRepository('App:Commenter')
        ->findall();
        
        return $this->render('commenter/index.html.twig', [
             'commenter' => $commenter,
             'controller_name' => 'UserController',
        ]);

        
    }
}
