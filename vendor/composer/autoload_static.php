<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit780768f0fa398a07b6a0fa72465f9040
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jhona\\Crud\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jhona\\Crud\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit780768f0fa398a07b6a0fa72465f9040::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit780768f0fa398a07b6a0fa72465f9040::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit780768f0fa398a07b6a0fa72465f9040::$classMap;

        }, null, ClassLoader::class);
    }
}
