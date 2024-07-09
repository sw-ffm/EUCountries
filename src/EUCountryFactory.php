<?php

namespace swffm\EUCountries;

use swffm\EUCountries\EUCountry;
use swffm\EUCountries\Countries\CountryMapper;

class EUCountryFactory
{

    public static function generate( $countryIso="de" ) : EUCountry
    {

        $mapper = new CountryMapper();
        return $mapper->getCountryObject( $countryIso );

    }

}