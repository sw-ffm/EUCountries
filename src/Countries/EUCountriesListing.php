<?php 

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\Database\PDOConnector;
use swffm\EUCountries\Models\Country;


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

            $stmt = PDOConnector::getInstance()->prepare( self::sqlStatement() );
            $stmt->execute( [] );
            while( $dbdata = $stmt->fetch( \PDO::FETCH_ASSOC ) ){

                self::$euCountries[] = new Country( $dbdata );

            }

        }

        return self::$euCountries;

    }

    private static function sqlStatement() : string{

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
            ORDER BY a.iso ASC
        
        ";

    }

}