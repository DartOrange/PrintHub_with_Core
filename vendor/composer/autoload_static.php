<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit009e2eb19b297af5e79f4047dcff375c
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'printhub\\' => 9,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'printhub\\' => 
        array (
            0 => __DIR__ . '/..' . '/printhub/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit009e2eb19b297af5e79f4047dcff375c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit009e2eb19b297af5e79f4047dcff375c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}