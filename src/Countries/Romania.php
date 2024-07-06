<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Romania extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'ro';

        $this->nameGerman = 'Rumänien';

        $this->nameLocal = 'România';

        $this->nameEnglish = 'Romania';

        $this->capitalCity = 'Bukarest';

        $this->centerLat = '45.9885169';

        $this->centerLon = '24.9692931';

        $this->vatRate = '24';

        $this->currency = 'RON';

        $this->currencySymbol = 'lei';

        $this->rateToEuro = '4.98';
    }
    
}