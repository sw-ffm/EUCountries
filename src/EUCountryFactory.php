<?php

namespace swffm\EUCountries;

use swffm\EUCountries\EUCountries;
use swffm\EUCountries\Countries\ClassMap;

class EUCountryFactory 
{

    public static function generate( $country="de" ) : EUCountries
    {

        $className = ClassMap::get( strtolower( $country ) );

        if(class_exists( $className )){

            return new $className();

        }

        throw new \Exception('Country ' . $country . ' not found!');

    }

}