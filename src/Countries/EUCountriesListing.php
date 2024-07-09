<?php 

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\Models\Country;
use swffm\EUCountries\Repositories\CountryRepository;

class EUCountriesListing 
{

    private static $euCountries = null;


    private function __clone(){}

    public function __wakeup(){

        throw new \Exception("Cannot unserialize a singleton.");
    
    }

    private function __construct(){}

    public static function getEUCountries() : array{

        if( self::$euCountries === null ){

            self::$euCountries = [];

            $repository = new CountryRepository();
            $result = $repository->getAll();
            while( $dbdata = $result->fetch( \PDO::FETCH_ASSOC ) ){

                self::$euCountries[] = new Country( $dbdata );

            }

        }

        return self::$euCountries;

    }

}