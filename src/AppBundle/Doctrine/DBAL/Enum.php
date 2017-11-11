<?php

namespace AppBundle\Doctrine\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

abstract class Enum extends Type
{
    public static $values = array();

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $values = static::$values;
        sort($values);
        
        return "ENUM('" . implode("', '", $values)."') COMMENT '(DC2Type:".$this->getName().")'";
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ( null === $value ) {
            return null;
        }
        self::check($value);
        
        return $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ( null === $value ) {
            return null;
        }
        self::check($value);
        
        return $value;
    }

    public static function getValue($value)
    {
        self::check($value);

        return $value;
    }
    
    public static function getChoices(array $values=null)
    {
        $values = $values !== null ? $values : static::$values;

        return array_combine($values, $values);
    }

    protected static function check($value)
    {
        if ($value !== null && !in_array($value, static::$values)) {
            throw new \InvalidArgumentException(static::class . " : Invalid '" . $value . "' key.");
        }

        return true;
    }
}
