<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Latvia extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'lv';

        $this->nameGerman = 'Lettland';

        $this->nameLocal = 'Latvija';

        $this->nameEnglish = 'Latvia';

        $this->capitalCity = 'Riga';

        $this->centerLat = '56.882354';

        $this->centerLon = '24.9250501';

        $this->vatRate = '21';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}