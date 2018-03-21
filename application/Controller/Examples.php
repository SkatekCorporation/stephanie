<?php
/**
* Examples.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Model
*/
namespace App\Controller;

use Stephanie\Controller\AppController;

class Examples extends AppController {

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
