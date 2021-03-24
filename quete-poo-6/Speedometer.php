<?php


class Speedometer
{

    const KMTOMILE = 0.621;

    /**
     * @param float $km
     * @return float
     */
    public static function convertKmToMiles(float $km): float
    {
        return $km * SELF::KMTOMILE;
    }

    /**
     * @param float $mile
     * @return float
     */
    public static function convertMileToKms(float $mile): float
    {
        return $mile/SELF::KMTOMILE;
    }
}