<?php

namespace Stephanie\Interfaces;

interface AuthInterface {

    /**
     * Obtenir l'utilisateur courant
     * @return array
     */
    public static function getUser();

    /**
     * Enregistrer l'utilisateur courant, soit dans les sessions, soit dans cookies
     * @param array $user L'utilisateur a enregistrer
     */
    public static function setUser($user);

    /**
     * Verification du mot de passe
     * @param string $password Mot de passe en claire
     * @param string $password2 Modt de passe hasher
     * @return boolean
     */
    public static function checkPassword($password, $password2);

    /**
     * Crypter le mot de passe
     * @param string $password Mot de passe en claire
     * @return string Hash
     */
    public static function setPassword($password);

}