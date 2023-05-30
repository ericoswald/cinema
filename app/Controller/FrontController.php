<?php

namespace App\Controller;

use App\Database;

$db = new Database('cinemaa');
class FrontController
{


    public function home(): string
    {
        ob_start();

        $mainTemplate = ROOT_PROJECT . '/app/View/home.php';
        $title = "Acceuil du Site";

        require ROOT_PROJECT . '/app/View/template.php';


        return ob_get_clean();
    }
    public function salle(): string
    {
        ob_start();

        $mainTemplate = ROOT_PROJECT . '/app/View/salle.php';

        require ROOT_PROJECT . '/app/View/template.php';


        return ob_get_clean();
    }
    public function quizz(): string
    {
        ob_start();

        $mainTemplate = ROOT_PROJECT . '/app/View/quizz.php';
        $title = "Quizz";


        require ROOT_PROJECT . '/app/View/template.php';


        return ob_get_clean();
    }
    public function like(): string
    {
        ob_start();

        $mainTemplate = ROOT_PROJECT . '/app/View/like.php';
        $title = "Choissisez les films que vous n'aimez pas.";


        require ROOT_PROJECT . '/app/View/template.php';


        return ob_get_clean();
    }

    public function films(): string
    {
        ob_start();

        $mainTemplate = ROOT_PROJECT . '/app/View/films.php';
        $title = "Liste de vos films.";


        require ROOT_PROJECT . '/app/View/template.php';


        return ob_get_clean();
    }
    public function l404(): string
    {
        ob_start();

        $mainTemplate = ROOT_PROJECT . '/app/View/l404.php';
        $title = "Liste de vos films.";


        require ROOT_PROJECT . '/app/View/template.php';


        return ob_get_clean();
    }
}
