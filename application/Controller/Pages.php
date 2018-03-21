<?php
/**
* Pages.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Controller des pages de l'application
*/
namespace App\Controller;

use Stephanie\Controller\AppController;

class Pages extends AppController {

    public function index()
    {
        parent::debut('index', [
            'title' => 'Accueil'
        ]);
    }

    public function skatek()
    {
        $this->render('skatek', [
            'title' => 'Skatek Corporation'
        ]);
    }
}