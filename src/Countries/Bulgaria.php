<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Bulgaria extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'bg';

        $this->nameGerman = 'Bulgarien';

        $this->nameLocal = 'България';

        $this->nameEnglish = 'Bulgaria';

        $this->capitalCity = 'Sofia';

        $this->centerLat = '42.7097709';

        $this->centerLon = '25.1366881';

        $this->vatRate = '20';

        $this->currency = 'BGN';

        $this->currencySymbol = 'B';

        $this->rateToEuro = '1.96';
    }
    
}