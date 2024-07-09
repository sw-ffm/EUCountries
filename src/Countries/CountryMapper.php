<?php 

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\Models\Country;
use swffm\EUCountries\Models\EUCountryInterface;
use swffm\EUCountries\Repositories\CountryRepository;


class CountryMapper
{

    public function getCountryObject( string $iso ) : EUCountryInterface{

        $iso = $iso != "" ? $iso : "de";
        $repository = new CountryRepository();
        $result = $repository->getByISO( $iso );
        if( $dbdata = $result->fetch( \PDO::FETCH_ASSOC ) ){

            return new Country( $dbdata );

        }

        throw new \Exception('Country ' . $iso . ' not found!');

    }

}