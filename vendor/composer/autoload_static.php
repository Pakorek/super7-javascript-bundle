<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteefe7fae80de28ff7e8d7f22a298b325
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Super7\\JavascriptBundle\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Super7\\JavascriptBundle\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteefe7fae80de28ff7e8d7f22a298b325::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteefe7fae80de28ff7e8d7f22a298b325::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteefe7fae80de28ff7e8d7f22a298b325::$classMap;

        }, null, ClassLoader::class);
    }
}
