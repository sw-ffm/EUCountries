<?php

namespace swffm\EUCountries;

use swffm\EUCountries\Models\EUCountryInterface;
use swffm\EUCountries\Countries\CountryMapper;


class EUCountryFactory
{

    public static function generate( $countryIso="de" ) : EUCountryInterface
    {

        $mapper = new CountryMapper();
        return $mapper->getCountryObject( $countryIso );

    }

}