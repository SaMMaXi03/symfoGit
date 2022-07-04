<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OtherController extends AbstractController
{
    /**
     * @Route("/stars",name="stars");
     */
    public function character()
    {
        $disney = [
            1 => [
                'title' => 'Goofy',
                'color' => 'red',
                'published' => true,
                'image' => 'https://disney-planet.fr/wp-content/uploads/2020/01/image-defense-fumer-02-640x478.jpg.webp',
                'publishedDate' => new \DateTime('NOW'),
                'id' => 1
            ],
            2 => [
                'title' => 'Mickey',
                'color' => 'yellow',
                'published' => true,
                'image' => 'https://fr.web.img6.acsta.net/newsv7/20/12/04/10/47/1155059.jpg',
                'publishedDate' => new \DateTime('NOW'),
                'id' => 2
            ],
            3 => [
                'title' => 'Plutot',
                'color' => 'black',
                'published' => true,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTePkMQdSy5Fueda9_f1sN07Ej-0O6EdG6w6A&usqp=CAU',
                'publishedDate' => new \DateTime('NOW'),
                'id' => 3
            ],
            4 => [
                'title' => 'Donald',
                'description' => 'Cooking',
                'color' => 'blue',
                'published' => true,
                'image' => 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ea914385-70d7-476d-aa3b-37d0c449c464/de4r0pq-243f882d-5584-470f-ae01-4250012137d4.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2VhOTE0Mzg1LTcwZDctNDc2ZC1hYTNiLTM3ZDBjNDQ5YzQ2NFwvZGU0cjBwcS0yNDNmODgyZC01NTg0LTQ3MGYtYWUwMS00MjUwMDEyMTM3ZDQuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.EtgBIhXChfOov3UlF5tu5aRV__7UHJTKzDtW0Lajx9c',
                'publishedDate' => new \DateTime('NOW'),
                'id' => 4
            ],
            5 => [
                'title' => 'Pat',
                'description' => 'Smoking',
                'color' => 'blue',
                'published' => true,
                'image' => 'https://pbs.twimg.com/media/D2aycVPWoAEa6dn.jpg',
                'publishedDate' => new \DateTime('NOW'),
                'id' => 5
            ]
        ];

        return $this->render('category_potato.html.twig',[
            'star' => $disney
        ]);
    }


    /**
     * @Route("/star/{id}",name="star");
     */

    public function pictures($id)
    {
        $ficheArtistes =
            [
            1 => [
            'title' => 'Goofy',
            'color' => 'red',
            'published' => true,
            'image' => 'https://disney-planet.fr/wp-content/uploads/2020/01/image-defense-fumer-02-640x478.jpg.webp',
            'publishedDate' => new \DateTime('NOW'),
            'id' => 1
            ],
            2 => [
            'title' => 'Mickey',
            'color' => 'yellow',
            'published' => true,
            'image' => 'https://fr.web.img6.acsta.net/newsv7/20/12/04/10/47/1155059.jpg',
            'publishedDate' => new \DateTime('NOW'),
            'id' => 2
            ],
            3 => [
            'title' => 'Plutot',
            'color' => 'black',
            'published' => true,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTePkMQdSy5Fueda9_f1sN07Ej-0O6EdG6w6A&usqp=CAU',
            'publishedDate' => new \DateTime('NOW'),
            'id' => 3
            ],
            4 => [
            'title' => 'Donald',
            'description' => 'Cooking',
            'color' => 'blue',
            'published' => true,
            'image' => 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ea914385-70d7-476d-aa3b-37d0c449c464/de4r0pq-243f882d-5584-470f-ae01-4250012137d4.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2VhOTE0Mzg1LTcwZDctNDc2ZC1hYTNiLTM3ZDBjNDQ5YzQ2NFwvZGU0cjBwcS0yNDNmODgyZC01NTg0LTQ3MGYtYWUwMS00MjUwMDEyMTM3ZDQuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.EtgBIhXChfOov3UlF5tu5aRV__7UHJTKzDtW0Lajx9c',
            'publishedDate' => new \DateTime('NOW'),
            'id' => 4
            ],
            5 => [
            'title' => 'Pat',
            'description' => 'Smoking',
            'color' => 'blue',
            'published' => true,
            'image' => 'https://pbs.twimg.com/media/D2aycVPWoAEa6dn.jpg',
            'publishedDate' => new \DateTime('NOW'),
            'id' => 5
            ]
        ];

        return $this->render('category_disney.html.twig',[
        'star' => $ficheArtistes[$id]
        ]);
    }
}