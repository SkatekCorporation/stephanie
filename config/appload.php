<?php

/**
* Appload.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Les fonctions globales de l'application ainsi que les importantes constantes
*/
    
    /**
     * Si tu veut activer le cache ou le mode developpement/production
     * DEBUG => TRUE   Pour le developpement
     * DEBUG => FALSE  Pour la production
     */
    define('DEBUG', TRUE);

    /**
     * Restriction d'utilisation avec la console ou d'autres interface
     */
    verification_interface();

    /**
     * Demarrage des sessions dans toute l'application
     */
    session_start();

    /**
     * Inclusion du fichier de l'autoload
     * Pour le chargement automatiques des fichiers
     */
    require dirname(__DIR__) . "/vendor/autoload.php";

    /**
    * Affichage des erreurs
    * 
    * Ceci est geré avec la valeur de la constante DEBUG
    */
    error_reporting(DEBUG ? E_ALL : FALSE);

    /**
    * Nom du domaine de l'application
    * Si l'application se trouve dans un sous dossier, veuillez taper le chemin relatif vers le sous dossier 
    * contenant l'application avec tout ses fichiers
    */
    define('DOMAIN', '/stephanie/');

    /**
    * Configuration base de données
    * Remplacer correctement les valeurs selon la configuration de votre BDD
    * HOST        => Hote de la BDD, laisser localhost par defaut, si vous etes en local
    * DB_NAME     => Nom de la base de donnees
    * DB_USERNAME => Nom d'utilisateur de la BDD, root par defaut
    * DB_PASSWORD => Mot de passe de la base de donnees
    */
    define('HOST',        'localhost');
    define('DB_NAME',     'stephanie');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'Skatek-001');
    
    /**
     * Définitions des themes de l'Application LeTémoin
     * Les différents thèmes disponibles sont :
     * default, cyborg, darkly, lumen, simplex, slate, spacelab, united
     */
    define('APP_THEME', 'united');
    
    /**
     * Les constantes pour LeTémoin
     */
    define('JOUR',  date('Y-m-d'));
    define('HEURE', date('H:i:s'));

    /**
    * Les constantes des emplacements des fichiers de l'application
    * Il ne pas important de modifier les valeurs par defaut
    */
    define("ROOT",          dirname(__DIR__));
    define("APPS_DIR",      ROOT     . DS . "application");
    define("TEMPLATES_DIR", APPS_DIR . DS . "Templates");
    define("CACHES_DIR",    APPS_DIR . DS . "Caches");

    /**
     * Definitions des constantes du coeur de l'application
     */
    define("CORE_DIR",      ROOT     . DS . "core");
    define("CORE_TEMPLATES",CORE_DIR . DS . "Templates");
    define("FLASH_KEY",     "StephanieFlash");

    /**
    * Constantes des fichiers pour la vue
    */
    define('ASSETS_DIR',    DOMAIN . 'assets/');
    define('CSS_DIR',       ASSETS_DIR . 'css/');
    define('JS_DIR',        ASSETS_DIR . 'js/');
    define('IMAGES_DIR',    ASSETS_DIR . 'img/');
    define('FILES_DIR',     ASSETS_DIR . 'files/');
    define('FONTS_DIR',     ASSETS_DIR . 'fonts/');

     /**
     * Pour l'affichage des variables en mode debugger,
     * Accessible partout dans l'application
     */
    function debug($var = null){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
    
    /**
     * Fonction globale pour afficher les erreurs
     * En attendant l'implementation de la class pour le FLASH
     * @param array|string $messages Le message a afficher
     * @param string $class La classe pour decorer l'affichage
     */
    function debugErrors($messages = null, $class = 'danger'){
        echo "<br><div class=\"container\">";
        echo "<div class=\"alert alert-$class\">";
        echo "<h4>Veuillez corriger";
        if (count($messages) > 1){ echo " les erreurs suivantes"; } 
        else { echo " l'erreur suivante"; }
        echo " :</h4>";

        if (is_array($messages)) {
            echo "<ul>";
            foreach($messages as $message){ echo "<li><strong>$message</strong></li>"; }
            echo "</ul>";
        } else { echo $messages; }
        echo "</div></div>";
    }


    /**
     * Affichage des messages success selon la logique bootstrap
     */
    function debugSuccess($message = null, $class = 'success'){
        echo '<div class = "container">';
        echo '<div class = "alert alert-' . $class . '">';
        echo $message;
        echo '</div></div>';
    }


    /**
     * On verifie si l'interface utiliser est permises, 
     * Sinon, on bloque le lancement de l'application
     */
    function verification_interface(){
        if (php_sapi_name() == 'cli') {
            print("\n\tSalut!\n\tNous ne prenons pas encore en charge ce type d'interface\n\n");
            print("\tCopyright 2018, Skatek Corporation\n\n");
            exit();
        }
    }


    /**
     * Utilisation de CakeORM
     */
    use Cake\Datasource\ConnectionManager;

    ConnectionManager::setConfig('default', [
        'className' => 'Cake\Database\Connection',
        'driver' => 'Cake\Database\Driver\Mysql',
        'database' => DB_NAME,
        'username' => DB_USERNAME,
        'password' => DB_PASSWORD,
        'host'     => HOST,
        'cacheMetadata' => false // If set to `true` you need to install the optional "cakephp/cache" package.
    ]);
