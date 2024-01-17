<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb947d7ac318ad1d49dc72584c08c1472
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nhanguyen\\Hello\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nhanguyen\\Hello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb947d7ac318ad1d49dc72584c08c1472::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb947d7ac318ad1d49dc72584c08c1472::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb947d7ac318ad1d49dc72584c08c1472::$classMap;

        }, null, ClassLoader::class);
    }
}