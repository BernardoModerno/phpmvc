<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91ed68ea09e00023984bfcafa784326a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91ed68ea09e00023984bfcafa784326a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91ed68ea09e00023984bfcafa784326a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
