<?php 

namespace swffm\EUCountries\Models;

use EUCurrencyInterface;


class Currency extends EUCurrencyInterface
{

    function __construct( Array $dbdata ){

        $this->id = $dbdata["id"];
        
        $this->iso = $dbdata["iso"];

        $this->symbol = $dbdata["symbol"];

        $this->rateToEuro = $dbdata["rate_to_euro"];

    }

}