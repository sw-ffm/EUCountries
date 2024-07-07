<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Spain extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'es';

        $this->nameGerman = 'Spanien';

        $this->nameLocal = 'España';

        $this->nameEnglish = 'Spain';

        $this->capitalCity = 'Madrit';

        $this->centerLat = '40.4194819';

        $this->centerLon = '-3.4835419';

        $this->vatRate = '21';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}