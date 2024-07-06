<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Austria extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'at';

        $this->nameGerman = 'Österreich';

        $this->nameLocal = 'Österreich';

        $this->nameEnglish = 'Austria';

        $this->capitalCity = 'Wien';

        $this->centerLat = '47.600426';

        $this->centerLon = '14.363823';

        $this->vatRate = '20';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}