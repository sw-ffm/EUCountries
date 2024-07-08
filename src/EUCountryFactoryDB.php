<?php

namespace swffm\EUCountries;

use swffm\EUCountries\EUCountries;
use swffm\EUCountries\Countries\CountryMapper;

class EUCountryFactoryDB
{

    public static function generate( $countryIso="de" ) : EUCountries
    {

        $mapper = new CountryMapper();
        return $mapper->getCountryObject( $countryIso );

    }

}