<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Germany extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'de';

        $this->nameGerman = 'Deutschland';

        $this->nameLocal = 'Deutschland';

        $this->nameEnglish = 'Germany';

        $this->capitalCity = 'Berlin';

        $this->centerLat = '50.807656';

        $this->centerLon = '10.429173';

        $this->vatRate = '19';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}