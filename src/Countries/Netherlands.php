<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Netherlands extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'nl';

        $this->nameGerman = 'Niederlande';

        $this->nameLocal = 'Nederland';

        $this->nameEnglish = 'Netherlands';

        $this->capitalCity = 'Amsterdam';

        $this->centerLat = '52.2661949';

        $this->centerLon = '5.7244881';

        $this->vatRate = '21';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}