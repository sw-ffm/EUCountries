<?php 

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountry;
use swffm\EUCountries\Models\Country;
use swffm\EUCountries\Repositories\CountryRepository;

class CountryMapper
{

    public function getCountryObject( string $iso ) : EUCountry{

        $iso = $iso != "" ? $iso : "de";
        $repository = new CountryRepository();
        $result = $repository->getByISO( $iso );
        if( $dbdata = $result->fetch( \PDO::FETCH_ASSOC ) ){

            return new Country( $dbdata );

        }

        throw new \Exception('Country ' . $iso . ' not found!');

    }

    private function sqlStatement() : string{

        return "

            SELECT 
                a.iso AS iso,
                a.name_german AS name_german,
                a.name_local AS name_local,
                a.name_english AS name_english,
                a.capital_city AS capital_city,
                a.center_lat AS center_lat,
                a.center_lon AS center_lon,
                a.vat_rate AS vat_rate,
                b.iso AS currency_iso,
                b.symbol AS currency_symbol,
                b.rate_to_euro AS rate_to_euro 
            FROM countries a 
            LEFT JOIN currencies b ON b.id = a.currency 
            WHERE a.iso=?
        
        ";

    }

}