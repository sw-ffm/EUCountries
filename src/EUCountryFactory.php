<?php

namespace swffm\EUCountries;

use swffm\EUCountries\EUCountries;
use swffm\EUCountries\Countries\ClassMapper;

class EUCountryFactory 
{

    public static function generate( $countryIso="de" ) : EUCountries
    {

        $className = ClassMapper::getInstance()->get( strtolower( $countryIso ) );

        if(class_exists( $className )){

            return new $className();

        }

        throw new \Exception('Country ' . $countryIso . ' not found!');

    }

}