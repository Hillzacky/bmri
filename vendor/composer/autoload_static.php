<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit253e7b8a8c1ba52a132c40d040a35b61
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hillzacky\\bmri\\' => 15,
        ),
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hillzacky\\bmri\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit253e7b8a8c1ba52a132c40d040a35b61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit253e7b8a8c1ba52a132c40d040a35b61::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit253e7b8a8c1ba52a132c40d040a35b61::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit253e7b8a8c1ba52a132c40d040a35b61::$classMap;

        }, null, ClassLoader::class);
    }
}
