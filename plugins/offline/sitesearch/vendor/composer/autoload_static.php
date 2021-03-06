<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26ecc513f46ec102eba59495a1b4e522
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26ecc513f46ec102eba59495a1b4e522::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26ecc513f46ec102eba59495a1b4e522::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
