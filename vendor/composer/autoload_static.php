<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a2b142bf657d3b933f6fdc2e80ea7a6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Simplephper\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Simplephper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a2b142bf657d3b933f6fdc2e80ea7a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a2b142bf657d3b933f6fdc2e80ea7a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a2b142bf657d3b933f6fdc2e80ea7a6::$classMap;

        }, null, ClassLoader::class);
    }
}