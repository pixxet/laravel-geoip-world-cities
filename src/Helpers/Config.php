<?php

namespace Pixxet\LaravelGeoIPWorldCities\Helpers;

/*
 * \Pixxet\LaravelGeoIPWorldCities for Laravel 5
 *
 * Copyright (c) 2015 - 2017 LaravelGeoIPWorldCities
 *
 * @copyright  Copyright (c) 2015 - 2017 \Pixxet\LaravelGeoIPWorldCities
 * 
 * @license http://opensource.org/licenses/MIT MIT license
 */

/**
 * @author Khalid Pixxet <khalid.moharram@gmail.com>
 */
class Config
{
    /**
     * Returns the cities table name from config files.
     * 
     * @return string
     */
    public static function citiesTableName()
    {
        return config('cities.table');
    }

    /**
     * Returns the full path to the dump file(s).
     * 
     * @return string
     */
    public static function dumpPath()
    {
        return __DIR__
                .DIRECTORY_SEPARATOR
                .'..'
                .DIRECTORY_SEPARATOR
                .'dump'
                .DIRECTORY_SEPARATOR;
    }
}
