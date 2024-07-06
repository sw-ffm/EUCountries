<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Italy extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'it';

        $this->nameGerman = 'Italien';

        $this->nameLocal = 'Italia';

        $this->nameEnglish = 'Italy';

        $this->capitalCity = 'Rom';

        $this->centerLat = '43.3008189';

        $this->centerLon = '12.4569831';

        $this->vatRate = '22';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}