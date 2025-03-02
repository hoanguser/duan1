<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ff8fefe7d0c82979749ff67baa18541
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\model\\database' => __DIR__ . '/../..' . '/app/model/database.php',
        'App\\model\\sanpham' => __DIR__ . '/../..' . '/app/model/sanpham.php',
        'App\\model\\user' => __DIR__ . '/../..' . '/app/model/user.php',
        'App\\model\\xl_data' => __DIR__ . '/../..' . '/app/model/xl_data.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ff8fefe7d0c82979749ff67baa18541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ff8fefe7d0c82979749ff67baa18541::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ff8fefe7d0c82979749ff67baa18541::$classMap;

        }, null, ClassLoader::class);
    }
}
