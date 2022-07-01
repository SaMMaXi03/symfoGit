<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/hello",name="hello");
     */
    public function hello()
    {
        $stars = [
            1 => [
                'title' => 'Goofy',
                'color' => 'red',
                'published' => false,
                'image' => 'https://disney-planet.fr/wp-content/uploads/2020/01/image-defense-fumer-02-640x478.jpg.webp',
                'publishedDate' => new \DateTime('NOW')
            ],
            2 => [
                'title' => 'Mickey',
                'color' => 'yellow',
                'published' => true,
                'image' => 'https://fr.web.img6.acsta.net/newsv7/20/12/04/10/47/1155059.jpg',
                'publishedDate' => new \DateTime('NOW')
            ],
            3 => [
                'title' => 'Plutot',
                'color' => 'black',
                'published' => true,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTePkMQdSy5Fueda9_f1sN07Ej-0O6EdG6w6A&usqp=CAU',
                'publishedDate' => new \DateTime('NOW')
            ],
            4 => [
                'title' => 'Donald',
                'description' => 'Cooking',
                'color' => 'blue',
                'published' => false,
                'image' => 'https://static.wikia.nocookie.net/picsou/images/4/4a/Donald_cuistot_%E2%80%93_Donald_Duck_%28s%C3%A9rie%29/revision/latest?cb=20161007190110&path-prefix=fr',
                'publishedDate' => new \DateTime('NOW')
            ],
            5 => [
                'title' => 'Pat',
                'description' => 'Smoking',
                'color' => 'blue',
                'published' => false,
                'image' => 'https://pbs.twimg.com/media/D2aycVPWoAEa6dn.jpg',
                'publishedDate' => new \DateTime('NOW')
            ]
        ];

        return $this->render('category_potato.html.twig',[
            'stars' => $stars
        ]);
    }
}