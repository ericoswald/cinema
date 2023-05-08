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
        
        require ROOT_PROJECT . '/app/View/template.php';


        return ob_get_clean();
    }
}
