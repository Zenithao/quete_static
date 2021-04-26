<?php

class Speedometer
{
    public const MILES = 0.62;
    public const KM = 1.61;

    public static function convertKmToMiles(int $km): float
    {
        return $km * self::MILES;
    }

    public static function convertMilesToKm(int $miles): float
    {
        return $miles * self::KM;
    }
}