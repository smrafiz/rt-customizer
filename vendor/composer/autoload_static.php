<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bffc4c45d770c4688d4279ba955f9f5
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RT\\Customizer\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RT\\Customizer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'RT\\Customizer\\Helpers\\Fns' => __DIR__ . '/../..' . '/inc/Helpers/Fns.php',
        'RT\\Customizer\\Helpers\\Install' => __DIR__ . '/../..' . '/inc/Helpers/Install.php',
        'RT\\Customizer\\RTCustomizer' => __DIR__ . '/../..' . '/inc/RTCustomizer.php',
        'RT\\Customizer\\Traits\\SingletonTrait' => __DIR__ . '/../..' . '/inc/Traits/SingletonTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bffc4c45d770c4688d4279ba955f9f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bffc4c45d770c4688d4279ba955f9f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5bffc4c45d770c4688d4279ba955f9f5::$classMap;

        }, null, ClassLoader::class);
    }
}
