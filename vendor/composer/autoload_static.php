<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05d609836b71997b8e357ac1f5db9d01
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit05d609836b71997b8e357ac1f5db9d01::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}