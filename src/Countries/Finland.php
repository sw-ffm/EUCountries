<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Finland extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'fi';

        $this->nameGerman = 'Finnland';

        $this->nameLocal = 'Suomi';

        $this->nameEnglish = 'Finland';

        $this->capitalCity = 'Helsinki';

        $this->centerLat = '65.1774669';

        $this->centerLon = '27.4707971';

        $this->vatRate = '24';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}