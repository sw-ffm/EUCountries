<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Ireland extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'ie';

        $this->nameGerman = 'Irland';

        $this->nameLocal = 'Éire';

        $this->nameEnglish = 'Ireland';

        $this->capitalCity = 'Dublin';

        $this->centerLat = '53.1768949';

        $this->centerLon = '-7.7624789';

        $this->vatRate = '23';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}