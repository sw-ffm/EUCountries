<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class France extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'fr';

        $this->nameGerman = 'Frankreich';

        $this->nameLocal = 'France';

        $this->nameEnglish = 'France';

        $this->capitalCity = 'Paris';

        $this->centerLat = '46.9424259';

        $this->centerLon = '2.4704901';

        $this->vatRate = '20';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}