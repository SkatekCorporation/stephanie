<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04a9be298fd8b51b91f7ef5f112290f7
{
    public static $files = array (
        '948ad5488880985ff1c06721a4e447fe' => __DIR__ . '/..' . '/cakephp/utility/bootstrap.php',
        '72142d7b40a3a0b14e91825290b5ad82' => __DIR__ . '/..' . '/cakephp/core/functions.php',
        '028fdea3165c4ba1ecccc83b7fec69fc' => __DIR__ . '/..' . '/cakephp/collection/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extensions\\' => 16,
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Stephanie\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'C' => 
        array (
            'Cake\\Validation\\' => 16,
            'Cake\\Utility\\' => 13,
            'Cake\\ORM\\' => 9,
            'Cake\\I18n\\' => 10,
            'Cake\\Event\\' => 11,
            'Cake\\Datasource\\' => 16,
            'Cake\\Database\\' => 14,
            'Cake\\Core\\' => 10,
            'Cake\\Collection\\' => 16,
            'Cake\\Chronos\\' => 13,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/extensions/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Stephanie\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Cake\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/validation',
        ),
        'Cake\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/utility',
        ),
        'Cake\\ORM\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/orm',
        ),
        'Cake\\I18n\\' => 
        array (
            0 => __DIR__ . '/../..' . '/imports/I18n',
        ),
        'Cake\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/event',
        ),
        'Cake\\Datasource\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/datasource',
        ),
        'Cake\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/database',
        ),
        'Cake\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/core',
        ),
        'Cake\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/collection',
        ),
        'Cake\\Chronos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/imports/chronos/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04a9be298fd8b51b91f7ef5f112290f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04a9be298fd8b51b91f7ef5f112290f7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit04a9be298fd8b51b91f7ef5f112290f7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
