<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaa575b10dfb50b7ee292e01480ad5afc
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

        spl_autoload_register(array('ComposerAutoloaderInitaa575b10dfb50b7ee292e01480ad5afc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaa575b10dfb50b7ee292e01480ad5afc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaa575b10dfb50b7ee292e01480ad5afc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
