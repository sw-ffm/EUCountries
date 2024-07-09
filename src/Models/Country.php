<?php 

namespace swffm\EUCountries\Models; 

use swffm\EUCountries\Models\EUCountryInterface; 


class Country extends EUCountryInterface
{

    function __construct( Array $dbdata ){

        $this->id = $dbdata["id"];
        
        $this->iso = $dbdata["iso"];

        $this->nameGerman = $dbdata["name_german"];

        $this->nameLocal = $dbdata["name_local"];

        $this->nameEnglish = $dbdata["name_english"];

        $this->capitalCity = $dbdata["capital_city"];

        $this->centerLat = $dbdata["center_lat"];

        $this->centerLon = $dbdata["center_lon"];

        $this->vatRate = $dbdata["vat_rate"];

        $this->currencyId = $dbdata["currency_id"];

        $this->currencyIso = $dbdata["currency_iso"];

        $this->currencySymbol = $dbdata["currency_symbol"];

        $this->rateToEuro = $dbdata["rate_to_euro"];

    }

}