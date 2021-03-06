<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabb9b865f3265ccafcf97fe877e48931
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabb9b865f3265ccafcf97fe877e48931::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabb9b865f3265ccafcf97fe877e48931::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
