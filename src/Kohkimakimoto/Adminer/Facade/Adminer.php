<?php
namespace Kohkimakimoto\Adminer\Facade;

/**
 * Adminer Facade
 */
class Adminer
{
    protected static $shouldRequestToAdminer = false;

    public static function path()
    {
        return __DIR__."/../Resources/adminer.php";
    }

    public static function shouldRequestToAdminer()
    {
        return static::$shouldRequestToAdminer;
    }

    public static function response()
    {
        static::$shouldRequestToAdminer = true;
        return new \Kohkimakimoto\Adminer\Http\Response();
    }
}