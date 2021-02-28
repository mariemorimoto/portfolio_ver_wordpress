<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf05ec8c4f57916c6aeaa576ef0938561
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf05ec8c4f57916c6aeaa576ef0938561::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf05ec8c4f57916c6aeaa576ef0938561::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
