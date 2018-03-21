<?php
/**
* Users.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Entity de la table Users
*/
namespace App\Model\Entity;

use Stephanie\Auth\Auth;
use Cake\ORM\Entity;

class User extends Entity {
    public function _getNom($value){
        return ucfirst($value);
    }

    public function _getPrenom($value)
    {
        return ucfirst($value);
    }

    public function _getFonction($value){
        return ucfirst($value);
    }

    public function _setPassword($password){
        return Auth::setPassword($password);
    }
}