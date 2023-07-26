<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64f1238b7a7df0aa8459df5e4b3aa794
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64f1238b7a7df0aa8459df5e4b3aa794::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64f1238b7a7df0aa8459df5e4b3aa794::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64f1238b7a7df0aa8459df5e4b3aa794::$classMap;

        }, null, ClassLoader::class);
    }
}
