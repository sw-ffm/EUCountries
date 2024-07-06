<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Lithuania extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'lt';

        $this->nameGerman = 'Litauen';

        $this->nameLocal = 'Lietuva';

        $this->nameEnglish = 'Lithuania';

        $this->capitalCity = 'Vilnius';

        $this->centerLat = '55.3855169';

        $this->centerLon = '24.0263101';

        $this->vatRate = '21';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}