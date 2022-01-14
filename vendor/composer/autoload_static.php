<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita29a70d65fd309ed56e381150be1e5a8
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KadokWeb\\Uploader\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KadokWeb\\Uploader\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita29a70d65fd309ed56e381150be1e5a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita29a70d65fd309ed56e381150be1e5a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita29a70d65fd309ed56e381150be1e5a8::$classMap;

        }, null, ClassLoader::class);
    }
}
