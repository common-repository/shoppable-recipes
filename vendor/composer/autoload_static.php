<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41c45d2eadff0968a7fe30e10e997e4f
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PaulFedorov\\RecipeWidgets\\Main' => __DIR__ . '/../..' . '/includes/class-main.php',
        'PaulFedorov\\RecipeWidgets\\Settings' => __DIR__ . '/../..' . '/includes/class-settings.php',
        'PaulFedorov\\RecipeWidgets\\WP_OSA' => __DIR__ . '/../..' . '/includes/class-wp-osa.php',
        'PaulFedorov\\RecipeWidgets\\Widget' => __DIR__ . '/../..' . '/includes/class-widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit41c45d2eadff0968a7fe30e10e997e4f::$classMap;

        }, null, ClassLoader::class);
    }
}
