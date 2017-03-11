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

use Illuminate\Database\Eloquent\Model;
use Pixxet\LaravelGeoIPWorldCities\Helpers\Config;

/**
 * @author Khalid Pixxet <khalid.moharram@gmail.com>
 */
class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country',
        'city',
        'city_ascii',
        'region',
        'population',
        'latitude',
        'longitude',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];

    /**
     * Create a new City instance.
     * 
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = Config::citiesTableName();
    }
}
