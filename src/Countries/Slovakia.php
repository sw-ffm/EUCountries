<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Slovakia extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'sk';

        $this->nameGerman = 'Slowakei';

        $this->nameLocal = 'Slovensko';

        $this->nameEnglish = 'Slovakia';

        $this->capitalCity = 'Bratislava';

        $this->centerLat = '48.701221';

        $this->centerLon = '19.4711301';

        $this->vatRate = '20';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}