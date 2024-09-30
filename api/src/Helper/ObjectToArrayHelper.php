<?php

namespace App\Helper;


use ReflectionClass;

class ObjectToArrayHelper
{
    public static function filterNews(object $carDetails): array
    {
        $reflectionCarDetails = new ReflectionClass($carDetails);
        $properties = $reflectionCarDetails->getProperties();
        $reselt = [];
        foreach ($properties as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($carDetails);
            $name = $property->getName();
            $reselt[$name] = ($value instanceof \DateTime)
                ? $value->format('Y-m-d') : $value;

        }
        return $reselt;
    }
}