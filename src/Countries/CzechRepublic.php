<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class CzechRepublic extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'cz';

        $this->nameGerman = 'Tschechien';

        $this->nameLocal = 'Česká republika';

        $this->nameEnglish = 'Czech Republic';

        $this->capitalCity = 'Prag';

        $this->centerLat = '49.838008';

        $this->centerLon = '15.2634851';

        $this->vatRate = '21';

        $this->currency = 'CZK';

        $this->currencySymbol = 'kč';

        $this->rateToEuro = '25.14';
    }
    
}