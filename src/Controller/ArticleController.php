<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/",name="hello");
     */
    public function hello()
    {
        $name = 'Maxime';
        return $this->render('category_potato.html.twig',[
            'name' => $name
        ]);
    }
}