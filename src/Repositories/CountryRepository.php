<?php 

namespace swffm\EUCountries\Repositories;

use swffm\EUCountries\Database\PDOConnector;
use swffm\EUCountries\Models\EUCountryInterface;


class CountryRepository implements CountryRepositoryInterface 
{

    public function getAll(){

        $stmt = PDOConnector::getInstance()->prepare( self::sqlStatementAll() );
        $stmt->execute( [] );
        return $stmt;

    }

    public function getByISO( $iso ){

        $stmt = PDOConnector::getInstance()->prepare( $this->sqlStatementISO() );
        $stmt->execute( [$iso] );
        return $stmt;

    }

    public function update( EUCountryInterface $country ){

        /*Not yet implemented*/
        $this->sqlStatementUpdate();
        return null;

    }

    private function sqlStatementDBStructure() : string{

        return "
        
            SELECT 
                a.id AS id, 
                a.iso AS iso,
                a.name_german AS name_german,
                a.name_local AS name_local,
                a.name_english AS name_english,
                a.capital_city AS capital_city,
                a.center_lat AS center_lat,
                a.center_lon AS center_lon,
                a.vat_rate AS vat_rate,
                b.id AS currency_id,
                b.iso AS currency_iso,
                b.symbol AS currency_symbol,
                b.rate_to_euro AS rate_to_euro 
            FROM countries a 
            LEFT JOIN currencies b ON b.id = a.currency";

    }

    private function sqlStatementAll() : string{

        return $this->sqlStatementDBStructure() . " ORDER BY a.iso ASC";

    }

    private function sqlStatementISO() : string{

        return  $this->sqlStatementDBStructure() . " WHERE a.iso=?";

    }

    private function sqlStatementUpdate() : string{

        return "";

    }

}