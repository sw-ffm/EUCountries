<?php 

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\Database\PDOConnector;
use swffm\EUCountries\Models\Country;


class EUCountriesListing 
{

    private $euCountries = [];

    function __construct(){

        $stmt = PDOConnector::getInstance()->prepare( $this->sqlStatement() );
        $stmt->execute( [] );
        while( $dbdata = $stmt->fetch( \PDO::FETCH_ASSOC ) ){

            $this->euCountries[] = new Country( $dbdata );

        }

    }

    public function getEUCountries() : array{

        return $this->euCountries;

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
            ORDER BY a.iso ASC
        
        ";

    }

}