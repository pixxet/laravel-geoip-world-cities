<?php

namespace Pixxet\LaravelGeoIPWorldCities;

/*
 * \Pixxet\LaravelGeoIPWorldCities for Laravel 5
 *
 * Copyright (c) 2015 - 2017 LaravelGeoIPWorldCities
 *
 * @copyright  Copyright (c) 2015 - 2017 \Pixxet\LaravelGeoIPWorldCities
 * 
 * @license http://opensource.org/licenses/MIT MIT license
 */

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * @author Khalid Pixxet <khalid.moharram@gmail.com>
 */
class Facade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'cities';
    }
}
