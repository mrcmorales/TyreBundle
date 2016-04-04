<?php

namespace MrcMorales\TyreBundle\Enum;

/**
 * Enum
 */
class Enum
{
    /**
     * @return array
     */
    public static function toArray()
    {
        $class = new \ReflectionClass(get_called_class());

        return $class->getConstants();
    }

    /**
     * @return array
     */
    public static function toHumanizedArray()
    {
        $class = new \ReflectionClass(get_called_class());

        return $class->getConstants();
    }

    /**
     * @return array
     */
    public static function values()
    {
        $class = new \ReflectionClass(get_called_class());

        return array_flip($class->getConstants());
    }

    /**
     * @return array
     */
    public static function humanizedValues()
    {
        $values = self::values();
        foreach ($values as $k => &$v) {
            $v = trim(strtolower($v));
            $v = preg_replace('/_/', ' ', $v);
            $v = explode(' ', $v);
            $v = array_map('ucwords', $v);
            $v = implode(' ', $v);
        }

        return $values;
    }
}
