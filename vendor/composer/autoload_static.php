<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bdd881211d6fc2fa2d22c734b21dcbc
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bdd881211d6fc2fa2d22c734b21dcbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bdd881211d6fc2fa2d22c734b21dcbc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bdd881211d6fc2fa2d22c734b21dcbc::$classMap;

        }, null, ClassLoader::class);
    }
}
