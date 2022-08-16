<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit068f29005361bcfa3affbc5920e2ba77
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Balance\\PhpImap\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Balance\\PhpImap\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit068f29005361bcfa3affbc5920e2ba77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit068f29005361bcfa3affbc5920e2ba77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit068f29005361bcfa3affbc5920e2ba77::$classMap;

        }, null, ClassLoader::class);
    }
}