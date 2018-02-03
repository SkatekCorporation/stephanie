<?php

namespace Stephanie\Auth;

use Stephanie\Handlers\Session;

use Cake\ORM\TableRegistry;

/**
 * Classe se chargeant de la gestion de l'authentification
 */
class Auth {

    private static $user  = [];
    private static $table = "users";
    private $session;

    const KEY      = 'Auth';
    const USER_KEY = 'user';

    public function __construct($table = null)
    {
        if ($table != null){
            self::$table    = $table;
        }
        $this->session      = new Session();
    }

    public static function get(){
        return Session::get(self::KEY);
        // return $this->session->get(self::KEY);
    }

    public function setUser($user = null) {
        $auth = [
            self::USER_KEY => $user
        ];
        Session::set(self::KEY, $auth);
        // $this->session->set(self::KEY, $auth);
    }

    /**
     * Supprimer toute session AUTH
     */
    public static function delete()
    {
        return Session::delete(self::KEY);
        // return $this->session->delete(self::KEY);
    }

    /**
     * Obtenir l'utilisateur courant de puis les sessions
     * @return array
     */
    public static function getUser(){
        $user = self::get();
        if(isset($user[self::USER_KEY])){
            return $user[self::USER_KEY];
        } 
        return null;
    }

    /**
     * Verification du mot de passe avec l'algorithme SHA1
     * @param string $pass1 Mot de passe en clair
     * @param string $pass2 Hash du mot de passe a verifier
     * @return boolean
     */
    public static function checkPassword($pass1, $pass2){
        return password_verify($pass1, $pass2);
    }

    /**
     * Crypter le mot de passe
     * @param string $password Mot de passe en claire
     * @return string Hash
     */
    public static function setPassword($password = null){
        return password_hash($password, 1);
    }

    /**
     * Verifie si l'utilisateur et le mot de passe correspond bien a un enregistrement
     * @param string $username Username
     * @param string $password Mot de passe en clair
     * @return boolean|Cake\ORM\Entity
     */
    public static function identify($username = null, $password = null)
    {    
        $modelClass = \Stephanie\Controller\AppController::getModelClass(self::$table);
        $user = TableRegistry::get(self::$table, $modelClass)->find()->where(['username' => $username])->first();

        if (count($user) == 1){
            if (self::checkPassword($password, $user->password)){
                return $user->toArray();
            }
        }

        return false;
    }

    public function logout()
    {
        return $this->delete();
    }
}