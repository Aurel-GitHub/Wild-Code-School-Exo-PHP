<?php


namespace App\Controller;



class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        /** exo I */
        // $name = 'John Doe';
        // return $this->twig->render('hello/index.html.twig', [
        //     'name' => $name
        // ]);

        /** Exo  II */
        $persons = [
            ['name' => 'riri', 'age' => 10 ],
            ['name' => 'fifi', 'age' => 20],
            ['name' => 'loulou' , 'age'=> 30]
        ];

        foreach($persons as $person)
        {
            $person['name'].' '. $person['age'];
        }


        var_dump($person['age']);die;

        return $this->twig->render('hello/person.html.twig', [
        ]);

    }
}
