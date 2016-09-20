<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bf06a45ef4e2429d6371edf8bb31878
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RemoteImageUploader\\' => 20,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RemoteImageUploader\\' => 
        array (
            0 => __DIR__ . '/..' . '/ptcong/php-image-uploader/src/RemoteImageUploader',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'EasyRequest' => 
            array (
                0 => __DIR__ . '/..' . '/ptcong/php-http-class',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bf06a45ef4e2429d6371edf8bb31878::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bf06a45ef4e2429d6371edf8bb31878::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3bf06a45ef4e2429d6371edf8bb31878::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
