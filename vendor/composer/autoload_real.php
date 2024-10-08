<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaa723136d7318992fb46cbb8d5b2c821
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

        spl_autoload_register(array('ComposerAutoloaderInitaa723136d7318992fb46cbb8d5b2c821', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaa723136d7318992fb46cbb8d5b2c821', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaa723136d7318992fb46cbb8d5b2c821::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
