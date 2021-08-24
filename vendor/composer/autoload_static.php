<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb585f7925a6af087dfa5c1df19f110cb
{
    public static $files = array (
        'da253f61703e9c22a5a34f228526f05a' => __DIR__ . '/..' . '/wixel/gump/gump.class.php',
    );

    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'itrax\\' => 6,
        ),
        'G' => 
        array (
            'GUMP\\' => 5,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'itrax\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'GUMP\\' => 
        array (
            0 => __DIR__ . '/..' . '/wixel/gump/src',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb585f7925a6af087dfa5c1df19f110cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb585f7925a6af087dfa5c1df19f110cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb585f7925a6af087dfa5c1df19f110cb::$classMap;

        }, null, ClassLoader::class);
    }
}