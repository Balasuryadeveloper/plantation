<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita87739b229bf9d33794d2a2ac78401f6
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita87739b229bf9d33794d2a2ac78401f6::$classMap;

        }, null, ClassLoader::class);
    }
}
