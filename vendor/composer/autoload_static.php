<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e7ef473d97789c88f61971cb8f6795d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e7ef473d97789c88f61971cb8f6795d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e7ef473d97789c88f61971cb8f6795d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}