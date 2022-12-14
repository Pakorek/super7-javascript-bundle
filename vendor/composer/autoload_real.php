<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderIniteefe7fae80de28ff7e8d7f22a298b325
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderIniteefe7fae80de28ff7e8d7f22a298b325', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderIniteefe7fae80de28ff7e8d7f22a298b325', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticIniteefe7fae80de28ff7e8d7f22a298b325::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
