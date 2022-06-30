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
        $category =[
            'title' => 'Goofy',
            'color' => 'yellow',
            'published' => true,
            'description' => "Goofy is an animated character that first appeared in 1932's Mickey's Revue"
        ];
        return $this->render('category_potato.html.twig',[
            'category' => $category
        ]);
    }
}