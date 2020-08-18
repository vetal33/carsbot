<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    public function landingPage()
    {
        return $this->render('Main/index.html.twig');
    }


}