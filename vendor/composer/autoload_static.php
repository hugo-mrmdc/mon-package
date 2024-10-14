<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a528f0b753db6aa52653a9fa7de357b
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hugo\\MonPackage\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hugo\\MonPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a528f0b753db6aa52653a9fa7de357b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a528f0b753db6aa52653a9fa7de357b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a528f0b753db6aa52653a9fa7de357b::$classMap;

        }, null, ClassLoader::class);
    }
}