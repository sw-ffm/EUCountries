<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Belgium extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'be';

        $this->nameGerman = 'Belgien';

        $this->nameLocal = 'Belgique';

        $this->nameEnglish = 'Belgium';

        $this->capitalCity = 'Brüssel';

        $this->centerLat = '50.6819049';

        $this->centerLon = '4.7628831';

        $this->vatRate = '21';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}