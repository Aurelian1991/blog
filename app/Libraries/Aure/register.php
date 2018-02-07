<?php
namespace Aure;
class Register
{
    protected static $objects;

    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($alias)
    {
        if (isset(self::$objects[$alias])) {
            return self::$objects[$alias];
        } else {
            return false;
        }
    }


    static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

}