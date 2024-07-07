<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Cyprus extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'cy';

        $this->nameGerman = 'Zypern';

        $this->nameLocal = 'Κύπρος';

        $this->nameEnglish = 'Cyprus';

        $this->capitalCity = 'Nikosia';

        $this->centerLat = '34.996194';

        $this->centerLon = '33.0791181';

        $this->vatRate = '19';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}