<?php

namespace App\Enums;

use ReflectionClass;

trait EnumTrait
{
    public static function getConstants(): array
    {
        $class = new ReflectionClass(__CLASS__);

        return $class->getConstants();
    }
}
