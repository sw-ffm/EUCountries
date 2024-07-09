<?php 

namespace swffm\EUCountries\Models; 

use swffm\EUCountries\EUCountrie; 


class Country extends EUCountrie
{

    function __construct( Array $dbdata ){

        $this->iso = $dbdata["iso"];

        $this->nameGerman = $dbdata["name_german"];

        $this->nameLocal = $dbdata["name_local"];

        $this->nameEnglish = $dbdata["name_english"];

        $this->capitalCity = $dbdata["capital_city"];

        $this->centerLat = $dbdata["center_lat"];

        $this->centerLon = $dbdata["center_lon"];

        $this->vatRate = $dbdata["vat_rate"];

        $this->currency = $dbdata["currency_iso"];

        $this->currencySymbol = $dbdata["currency_symbol"];

        $this->rateToEuro = $dbdata["rate_to_euro"];

    }

}