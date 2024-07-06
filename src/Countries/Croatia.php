<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Croatia extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'hr';

        $this->nameGerman = 'Kroatien';

        $this->nameLocal = 'Hrvatska';

        $this->nameEnglish = 'Croatia';

        $this->capitalCity = 'Zagreb';

        $this->centerLat = '45.1880899';

        $this->centerLon = '16.2343331';

        $this->vatRate = '25';

        $this->currency = 'HRK';

        $this->currencySymbol = 'kn';

        $this->rateToEuro = '7.5345';
    }
    
}