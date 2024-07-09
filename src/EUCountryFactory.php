<?php

namespace swffm\EUCountries;

use swffm\EUCountries\EUCountrie;
use swffm\EUCountries\Countries\CountryMapper;

class EUCountryFactory
{

    public static function generate( $countryIso="de" ) : EUCountrie
    {

        $mapper = new CountryMapper();
        return $mapper->getCountryObject( $countryIso );

    }

}