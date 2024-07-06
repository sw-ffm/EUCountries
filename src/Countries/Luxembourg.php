<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Luxembourg extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'lu';

        $this->nameGerman = 'Luxemburg';

        $this->nameLocal = 'Luxembourg';

        $this->nameEnglish = 'Luxembourg';

        $this->capitalCity = 'Luxemburg';

        $this->centerLat = '49.7714419';

        $this->centerLon = '6.1078151';

        $this->vatRate = '17';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}