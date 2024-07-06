<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Portugal extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'pt';

        $this->nameGerman = 'Portugal';

        $this->nameLocal = 'Portugal';

        $this->nameEnglish = 'Portugal';

        $this->capitalCity = 'Lissabon';

        $this->centerLat = '39.9812309';

        $this->centerLon = '-8.0547489';

        $this->vatRate = '23';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}