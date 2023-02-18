<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1f2b601ac2221e6ef5aac0407c32c656
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit1f2b601ac2221e6ef5aac0407c32c656', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1f2b601ac2221e6ef5aac0407c32c656', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1f2b601ac2221e6ef5aac0407c32c656::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
