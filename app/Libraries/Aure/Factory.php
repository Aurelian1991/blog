<?php
namespace Aure;
class Factory{
    public static function CreateUpload(){
        $key = 'Oss';
        $Obj = Register::get($key);
        if (!$Obj) {
            $Obj = new Member();
            Register::set($key, $Obj);
        }

        return $Obj;

    }
}