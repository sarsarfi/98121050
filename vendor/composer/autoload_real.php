<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbb11b0879aa92436a1dd51300584a283
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

        spl_autoload_register(array('ComposerAutoloaderInitbb11b0879aa92436a1dd51300584a283', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbb11b0879aa92436a1dd51300584a283', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbb11b0879aa92436a1dd51300584a283::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
