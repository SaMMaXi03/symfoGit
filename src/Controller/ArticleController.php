<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController{
    /**
     * @Route("/",name="hello");
     */
    public function hello()
    {
        return new Response("Le durian ça sent mauvais");
    }
}