<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7eea9149193577f771cfe7a357e3045f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Snilius\\Twig\\' => 13,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Snilius\\Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/snilius/twig-sort-by-field/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7eea9149193577f771cfe7a357e3045f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7eea9149193577f771cfe7a357e3045f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7eea9149193577f771cfe7a357e3045f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
