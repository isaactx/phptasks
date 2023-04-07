<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b765b3273578354cbb412e3c50e1f09
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Phpaula\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Phpaula\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b765b3273578354cbb412e3c50e1f09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b765b3273578354cbb412e3c50e1f09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b765b3273578354cbb412e3c50e1f09::$classMap;

        }, null, ClassLoader::class);
    }
}
